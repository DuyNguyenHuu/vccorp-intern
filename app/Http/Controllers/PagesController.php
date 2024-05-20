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

    public function addCustomer(){
        $companyList = DB::table('company')->select('*')->get();
        return view('customers.addCustomer', compact('companyList'));
    }
    public function deleteCustomer(){
        $customerList = DB::table('customer')->select('*')->get();
        return view('customers.deleteCustomer', compact('customerList'));
    }
    public function updateCustomer(){
        $companyList = DB::table('company')->select('*')->get();
        $customerList = DB::table('customer')->select('*')->get();
        return view('customers.updateCustomer', compact('companyList','customerList'));
    }

    public function addOrder(){
        $productList = DB::table('product')->select('*')->get();
        $customerList = DB::table('customer')->select('*')->get();
        return view('orders.addOrder', compact('productList','customerList'));
    }
    public function deleteOrder(){
        $orderList=DB::table('order')->select('*')->get();
        return view('orders.deleteOrder', compact('orderList'));
    }
    public function updateOrder(){
        $orderList=DB::table('order')->select('*')->get();
        return view('orders.updateOrder', compact('orderList'));
    }

    public function addCompany(){
        return view('companys.addCompany');
    }
    public function deleteCompany(){
        $companyList=DB::table('company')->select('*')->get();
        return view('companys.deleteCompany', compact('companyList'));
    }
    public function updateCompany(){
        $companyList=DB::table('company')->select('*')->get();
        return view('companys.updateCompany', compact('companyList'));
    }
}