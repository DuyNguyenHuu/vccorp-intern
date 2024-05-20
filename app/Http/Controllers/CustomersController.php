<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    public function create(){
        $companyList = DB::table('company')->select('*')->get();
        return view('customers.addCustomer', compact('companyList'));
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->MAKH = $request->input('idCustomer');
        $customer->TENKH = $request->input('nameCustomer');
        $customer->DIACHI = $request->input('addressCustomer');
        $customer->SODIENTHOAI = $request->input('phoneCustomer');
        $customer->EMAIL = $request->input('emailCustomer');
        $customer->save();
        return redirect('/customers/create');

    }

    public function edit($id){
        return view('customers.updateCustomer');
    }

    public function deleteCustomer(){
        $customerList = DB::table('customer')->select('*')->get();
        return view('customers.deleteCustomer', compact('customerList'));
    }

}