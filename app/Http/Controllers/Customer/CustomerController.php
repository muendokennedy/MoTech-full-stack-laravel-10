<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;


class CustomerController extends Controller
{
    // All the pages that the customer is supposed to see
    public function index()
    {
        $products = Product::all();

        $offerProducts  =  Product::latest()->get()->take(3);

        $newArrivals = Product::latest()->get()->take(5);

        return view('index', compact('products', 'offerProducts', 'newArrivals'));
    }
    public function about()
    {
        return view('about');
    }
    public function products()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function cart()
    {
        return view('cart');
    }
    public function productPage(Product $product)
    {
        return view('productpage', compact('product'));
    }
}
