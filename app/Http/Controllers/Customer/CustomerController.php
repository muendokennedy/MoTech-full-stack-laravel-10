<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // All the pages that the customer is supposed to see
    public function index()
    {
        return view('index');
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
    public function productPage()
    {
        return view('productpage');
    }
}
