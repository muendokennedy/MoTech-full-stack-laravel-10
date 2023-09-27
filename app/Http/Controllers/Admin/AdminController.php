<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $admin = Admin::where('id', 2)->first();

        return view('admin.index', ['admin' => $admin]);
    }

    public function analytics()
    {
        return view('admin.analytics');
    }
    public function products()
    {
        return view('admin.products');
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
