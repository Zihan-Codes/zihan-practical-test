<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShippingController extends Controller
{
    public function index()
    {
        $items = DB::table('item_details')->get();
       // dd($items);

        return view('shippingDetails', compact('items'));
    }
}
