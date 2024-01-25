<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Stkcallback;
use Illuminate\Http\Request;
use App\Http\Requests\PlaceOrderRequest;

class CheckoutController extends Controller
{
    //
    public function getCartItems()
    {
        $cartItems = Cart::where('user_id', auth('web')->user()->id)->get();

        return view('checkout', compact('cartItems'));
    }

    public function getAccessToken()
    {
        $url = env('MPESA_ENV') == 0

        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'

        : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);

        curl_setopt_array($curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
            )
        );

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        return $response->access_token;
    }

    public function placeOrder(PlaceOrderRequest $request)
    {
        $orderData = $request->validated();

         $order = new Order();

         $order->user_id = auth('web')->user()->id;
         $order->firstName = $orderData['fname'];
         $order->lastName = $orderData['lname'];
         $order->email = $orderData['email'];
         $order->phone = $orderData['phone'];
         $order->address1 = $orderData['address1'];
         $order->address2 = $orderData['address2'];
         $order->totalPrice = $orderData['totalPrice'];
         $order->trackingNumber = 'motech' . rand(1111, 9999);

         $order->save();



         $cartItems = Cart::where('user_id', auth('web')->user()->id)->get();

         foreach($cartItems as $item){

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'Quantity' => $item->productQuantity,
                'price' => $item->product->discountPrice
            ]);
         }

         // Empty the cart

         if(auth('web')->user()->address1 == NULL){

            $user = User::where('id', auth('web')->user()->id)->first();

            $user->firstName = $orderData['fname'];
            $user->lastName = $orderData['lname'];
            $user->email = auth('web')->user()->email ?? $orderData['email'];
            $user->phone = $orderData['phone'];
            $user->address1 = $orderData['address1'];
            $user->address2 = $orderData['address2'];

            $user->update();
         }

         //Make the payments with payments with mpesa

         $timestamp = date('YmdHis');

        $password = base64_encode(env('MPESA_STK_SHORTCODE') . env('MPESA_PASSKEY') . $timestamp);

        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => "CustomerPayBillOnline",
            'Amount' => 1,
            'PartyA' => $orderData['phone'],
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $orderData['phone'],
            'CallBackURL' => env('MPESA_TEST_URL') . '/api/mobilemoney-payment-gateway/stk',
            'AccountReference' => env('MPESA_B2C_INITIATOR'),
            'TransactionDesc' => 'Payment of purchased prouducts'
        );

        $url = env('MPESA_ENV') == 0

        ? 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest'

        : 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        $responseData = json_decode($response, true);

        $responseCode = $responseData['ResponseCode'];

        if($responseCode == 0) {
            $MerchantRequestID = $responseData['MerchantRequestID'];
            $CheckoutRequestID = $responseData['CheckoutRequestID'];
            $customerMessage = $responseData['CustomerMessage'];

            // Save the responseto the database

            $payment = new Stkcallback;

            $payment->phone = $orderData['phone'];
            $payment->amount = 1;
            $payment->reference = env('MPESA_B2C_INITIATOR');
            $payment->description = 'Payment of purchased prouducts';
            $payment->MerchantRequestID = $MerchantRequestID;
            $payment->CheckoutRequestID = $CheckoutRequestID;
            $payment->status = 'Requested';
            $payment->password = $password;
            $payment->save();

        }

         $cartItems = Cart::where('user_id', auth('web')->user()->id)->get();

         Cart::destroy($cartItems);

         return redirect()->route('home')->with('message', 'The order has been place succesfully');

    }

    private function makeHttp($url, $body)
    {
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Authorization:Bearer ' .$this->getAccessToken()),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );

        $curl_response = curl_exec($curl);

        curl_close($curl);

        return $curl_response;
    }
}
