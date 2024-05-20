<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrdersController extends Controller
{
    public function create(){
        $productList = DB::table('product')->select('*')->get();
        $customerList = DB::table('customer')->select('*')->get();
        return view('orders.addOrder', compact('productList','customerList'));
    }

    public function store(Request $request){
        $order = new Order();
        $order->MAKH = $request->input('idCustomer');
        $order->MASP = $request->input('idProduct');
        $order->NGAYMUA = $request->input('date');
        $order->save();
        return redirect('/orders/create');

    }
    public function deleteOrder(){
        $orderList=DB::table('order')->select('*')->get();
        return view('orders.deleteOrder', compact('orderList'));
    }
    public function updateOrder(){
        $orderList=DB::table('order')->select('*')->get();
        return view('orders.updateOrder', compact('orderList'));
    }
}