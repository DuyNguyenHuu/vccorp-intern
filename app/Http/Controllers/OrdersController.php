<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Rules\Uppercase;

class OrdersController extends Controller
{
    public function index(){
        $orderList=DB::table('order')
                    ->join('product', 'order.masp', '=', 'product.masp')
                    ->join('customer', 'order.makh', '=', 'customer.makh')
                    ->orderBy('order.ngaymua', 'desc')
                    ->select('order.*', 'product.*', 'customer.*')
                    ->get();
        return view('orders.indexOrder', compact('orderList'));

    }
    public function create(){
        $customerList=DB::table('customer')->select('*')->get();
        $productList=DB::table('product')->select('*')->get();
        return view('orders.addOrder', compact('customerList', 'productList'));
    }

    public function store(Request $request){
        $request->validate([
            'idCustomer'=>'required',
            'idProduct'=>'required',
            'date'=>'required'
        ]);
        $order = new Order();
        $order->MAKH = $request->input('idCustomer');
        $order->MASP = $request->input('idProduct');
        $order->NGAYMUA = $request->input('date');
        $order->save();
        return redirect('/orders');

    }
    public function edit($MADH){
        $orderEdit=DB::table('order')->where('MADH', $MADH)->first();
        $customerOrderEdit=DB::table('customer')->select('*')->get();
        $productOrderEdit=DB::table('product')->select('*')->get();
        return view('orders.updateOrder', compact('orderEdit', 'customerOrderEdit', 'productOrderEdit'));
    }
    public function update(request $request, $MADH){
        $request->validate([
            'idCustomer'=>'required',
            'idProduct'=>'required',
            'date'=>'required|date'
        ]);
        $orderUpdate=DB::table('order')->where('MADH', $MADH)
                        ->update([
                            'MAKH'=>$request->input('idCustomer'),
                            'MASP'=>$request->input('idProduct'),
                            'NGAYMUA'=>$request->input('date')
                        ]);
        return redirect('/orders');
    }

    public function destroy($MADH){
        $orderDelete=DB::table('order')->where('MADH', $MADH)->delete();
        return redirect('/orders');
    }
}