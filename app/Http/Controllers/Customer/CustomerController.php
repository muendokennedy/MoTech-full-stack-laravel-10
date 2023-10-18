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

        $topSalesProducts = Product::all()->take(8);

        $products = Product::all();

        $offerProducts  =  Product::all()->take(3);

        $newArrivals = Product::latest()->get()->take(5);

        return view('index', compact('products', 'offerProducts', 'newArrivals', 'topSalesProducts'));
    }
    public function about()
    {
        return view('about');
    }
    public function products()
    {
        $phones = Product::where('category', 'Phone')->latest()->filter(request(['phone']))->get();
        $laptops = Product::where('category', 'Laptop')->latest()->get();
        $smartwatches = Product::where('category', 'Smartwatch')->latest()->get();
        $televisions = Product::where('category', 'Television')->latest()->get();

        return view('products', compact('phones', 'laptops', 'smartwatches', 'televisions'));
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
