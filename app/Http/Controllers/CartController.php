<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $jsonData = $request->getContent();

        $product = json_decode($jsonData, true);

        if(auth('web')->user()){

            $productinCart = Cart::where('product_id', $product['id'])->get();

            if($productinCart->count() === 0){

                $productinWishlist = Wishlist::where('product_id', $product['id'])->get();

                if($productinWishlist){

                    $deleted = Wishlist::where('product_id', $product['id'])->delete();

                    $cart = Cart::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $product['id']
                    ]);

                    return response()->json(['status' => 'The product has been added to cart successfully!']);

                } else {

                    $cart = Cart::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $product['id']
                    ]);

                    return response()->json(['status' => 'The product has been added to cart successfully!']);
                }

            } else {

                return response()->json(['status' => 'The product is already in the cart!']);
            }

        } else {
            return response()->json(['status' => 'login to continue']);
        }

    }

    public function removeFromCart(Request $request)
    {
        $jsonData = $request->getContent();

        $product = json_decode($jsonData, true);

        if(auth('web')->user()){

            $deleted = Cart::where('product_id', $product['id'])->delete();

            return response()->json([
                'status' => 'The product has been removed from the cart!',
                'id' => $product['id']
            ]);

        } else {
            return response()->json(['status' => 'login to continue']);
        }
    }

    public function showCartItems()
    {

        $carts = Cart::where('user_id', auth('web')->user()->id)->get();

        return view('cart', compact('carts'));
    }
}
