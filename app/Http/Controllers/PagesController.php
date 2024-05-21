<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
        $customers = DB::table('customer')->inRandomOrder()->limit(10)->select ('*')->get();
        $countCustomers = DB::table('customer')->count();
        $orders = DB::table('order')
                        ->join('product', 'order.masp', '=', 'product.masp')
                        ->join('customer', 'order.makh', '=', 'customer.makh')
                        ->orderBy('order.ngaymua', 'desc')
                        ->limit(10)
                        ->select('order.*', 'product.*', 'customer.*')
                        ->get();
        $countOrders = DB::table('order')->count();
        return view('home', compact('customers', 'countCustomers', 'orders', 'countOrders'));
    }

}