<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $jsonData = $request->getContent();

        $product = json_decode($jsonData, true);

        return response()->json(['productNumber' => $product['id']]);



    }
}
