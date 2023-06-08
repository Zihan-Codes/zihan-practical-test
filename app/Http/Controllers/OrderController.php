<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function details()
    {
        return view('orderDetails');
    }

    public function management()
    {
        return view('orderManagement');
    }
}
