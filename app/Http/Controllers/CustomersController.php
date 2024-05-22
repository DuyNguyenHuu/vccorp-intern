<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Rules\Uppercase;

class CustomersController extends Controller
{
    public function index(){
        $customerList=DB::table('customer')->select('*')->get();
        return view('customers.indexCustomer', compact('customerList'));
    }
    public function create(){
        return view('customers.addCustomer');
    }

    public function store(Request $request){

        
        $request->validate([
            'idCustomer'=>'required',
            'nameCustomer'=>'required',
            'addressCustomer'=>'required',
            'phoneCustomer'=>'required|min_digits:10|max_digits:10',
            'emailCustomer'=>'required|email'
        ]);
        $customer = new Customer();
        $customer->MAKH = $request->input('idCustomer');
        $customer->TENKH = $request->input('nameCustomer');
        $customer->DIACHI = $request->input('addressCustomer');
        $customer->SODIENTHOAI = $request->input('phoneCustomer');
        $customer->EMAIL = $request->input('emailCustomer');
        $customer->save();
        return redirect('/customers');

    }

    public function show($MAKH){
        $customerShow=DB::table('order')
                        ->join('product', 'order.masp', '=', 'product.masp')
                        ->orderBy('order.ngaymua', 'desc')
                        ->where('MAKH', $MAKH)
                        ->select('order.*', 'product.*')
                        ->get();
        return view('customers.showCustomer', compact('customerShow'));
    }
    public function edit($MAKH){
        $customerEdit=DB::table('customer')->where('MAKH', $MAKH)->first();
        return view('customers.updateCustomer')->with('customerEdit', $customerEdit);
    }

    public function update(request $request, $MAKH){
        $request->validate([
            'idCustomer'=>'required|unique:customer',
            'nameCustomer'=>'required',
            'addressCustomer'=>'required',
            'phoneCustomer'=>'required|min_digits:10|max_digits:10',
            'emailCustomer'=>'required|email'
        ]);
        $customerUpdate=DB::table('customer')->where('MAKH', $MAKH)
                        ->update([
                            'MAKH'=>$request->input('idCustomer'),
                            'TENKH'=>$request->input('nameCustomer'),
                            'DIACHI'=>$request->input('addressCustomer'),
                            'SODIENTHOAI'=>$request->input('phoneCustomer'),
                            'EMAIL'=>$request->input('emailCustomer')
                        ]);
        return redirect('/customers');
    }

    public function destroy($MAKH){
        $customerDelete=DB::table('customer')->where('MAKH', $MAKH)->delete();
        return redirect('/customers');
    }

}