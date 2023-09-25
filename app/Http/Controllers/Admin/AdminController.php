<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.products');
    }
}