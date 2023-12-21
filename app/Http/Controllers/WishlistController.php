<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //Add products to the wishlist
    public function addToWishlist(Request $request)
    {
        $jsonData = $request->getContent();

        $product = json_decode($jsonData, true);

        if(auth('web')->user()){

            $productinWishlist = Wishlist::where('product_id', $product['id'])->get();

            if($productinWishlist->count() === 0){

                $wishlist = Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id'=> $product['id']
                ]);

                return response()->json(['status' => 'product added to wishlist successfully']);
            } else {

                return response()->json(['status' => 'The product is already in the wishlist']);
            }
        } else{

            return response()->json(['status' => 'Login to continue']);
        }
    }
    public function removeFromWishlist(Request $request)
    {
        $jsonData = $request->getContent();

        $product = json_decode($jsonData, true);

        if(auth('web')->user()){

            $deleted = Wishlist::where('product_id', $product['id'])->delete();

            return response()->json([
                'status'=> 'The product has been removed from wishlist',
                'id' => $product['id']
            ]);
        } else {

            return response()->json(['status' => 'Login to continue']);
        }

    }
}
