<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.index');
    }

    public function analytics()
    {
        return view('admin.analytics');
    }
    public function products()
    {
        $products = Product::latest()->get();

        return view('admin.products', compact('products'));
    }
    public function orders()
    {
        return view('admin.orders');
    }
    public function stock()
    {
        return view('admin.stock');
    }
    public function clientinfo()
    {
        return view('admin.clientinfo');
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
