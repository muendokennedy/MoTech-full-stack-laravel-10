<?php

namespace App\Http\Controllers;

use App\Models\Stkcallback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class mpesaResponsesController extends Controller
{
    //

    public function stkResponse(Request $request)
    {
        Log::info('This endpoint was hit from safaricom');

        Log::info($request->all());

        $data = file_get_contents('php://input');

        Storage::disk('local')->put('stk.txt', $data);

        $response = json_decode($data);

        $resultCode = $response->Body->stkCallback->ResultCode;

        $CheckoutRequestID = $response->Body->stkCallback->CheckoutRequestID;

        $ResultDescription = $response->Body->stkCallback->ResultDesc;

        if($resultCode == 0){
            $MerchantRequestID = $response->Body->stkCallback->MerchantRequestID;
            $Amount = $response->Body->stkCallback->CallbackMetadata->Item[0]->Value;
            $MpesaReceiptNumber = $response->Body->stkCallback->CallbackMetadata->Item[1]->Value;
            // $Balance = $response->Body->stkCallback->CallbackMetadata->Item[2]->Value;
            $TransactionDate = $response->Body->stkCallback->CallbackMetadata->Item[3]->Value;
            $Phone = $response->Body->stkCallback->CallbackMetadata->Item[4]->Value;

            $payment = Stkcallback::where('CheckoutRequestID', $CheckoutRequestID)->firstOrfail();

            $payment->status = 'Paid';
            $payment->TransactionDate = $TransactionDate;
            $payment->MpesaReceiptNumber = $MpesaReceiptNumber;
            $payment->ResultDescription = $ResultDescription;
            $payment->save();
        } else {

            $payment = Stkcallback::where('CheckoutRequestID', $CheckoutRequestID)->firstOrfail();

            $payment->ResultDescription = $ResultDescription;
            $payment->status = 'Failed';
            $payment->save();
        }

        Storage::disk('local')->delete('stk.txt');

    }

}
