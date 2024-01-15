<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function getCartItems()
    {
        $cartItems = Cart::where('user_id', auth()->user())->get();

        return view('checkout', compact('cartItems'));
    }
}