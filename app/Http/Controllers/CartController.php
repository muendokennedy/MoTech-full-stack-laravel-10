<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $jsonData = $request->getContent();

        $product = json_decode($jsonData, true);

        if(auth('web')->user()){

            $cart = Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product['id']
            ]);

        } else {
            return response()->json(['status' => 'login to continue']);
        }

        return response()->json(['productNumber' => $product['id']]);

    }
}
