<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function getCartItems()
    {
        $cartItems = Cart::where('user_id', auth('web')->user()->id)->get();

        return view('checkout', compact('cartItems'));
    }

    public function placeOrder(Request $request)
    {
         $order = new Order();

         $order->user_id = auth('web')->user()->id;
         $order->firstName = $request->input('fname');
         $order->lastName = $request->input('lname');
         $order->email = $request->input('email');
         $order->phone = $request->input('phone');
         $order->address1 = $request->input('address1');
         $order->address2 = $request->input('address2');
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

            $user->firstName = $request->input('fname');
            $user->lastName = $request->input('lname');
            $user->email = auth('web')->user()->email ?? $request->input('email');
            $user->phone = $request->input('phone');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');

            $user->update();
         }

         return redirect()->route('home')->with('message', 'The order has been place succesfully');

    }
}
