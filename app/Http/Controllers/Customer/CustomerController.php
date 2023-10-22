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

        $products = Product::all()->take(10);

        $offerProducts  =  Product::all()->take(3);

        $newArrivals = Product::latest()->where('category', 'Phone')
        ->orWhere('category', 'Laptop')->get()->take(10);

        return view('index', compact('products', 'offerProducts', 'newArrivals', 'topSalesProducts'));
    }
    public function about()
    {
        return view('about');
    }
    public function products(Request $request)
    {
        if(!($request->query('search') || $request->query('phone') || $request->query('laptop') || $request->query('smartwatch') || $request->query('television'))){

            $phones = Product::where('category', 'Phone')->latest()->get();
            $laptops = Product::where('category', 'Laptop')->latest()->get();
            $smartwatches = Product::where('category', 'Smartwatch')->latest()->get();
            $televisions = Product::where('category', 'Television')->latest()->get();

        } else{

            $phones = Product::where('category', 'Phone')->latest()->filter(request(['phone', 'search']))->get();
            $laptops = Product::where('category', 'Laptop')->latest()->filter(request(['laptop','search']))->get();
            $smartwatches = Product::where('category', 'Smartwatch')->latest()->filter(request(['smartwatch','search']))->get();
            $televisions = Product::where('category', 'Television')->latest()->filter(request(['television','search']))->get();

        }

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
