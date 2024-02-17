<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopcart()
    {
        return view('Admin.shopping.shopcart');
    }

    public function checkout()
    {
        return view('Admin.shopping.checkout');
    }
}
