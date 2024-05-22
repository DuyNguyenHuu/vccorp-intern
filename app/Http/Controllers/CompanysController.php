<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Rules\Uppercase;
use App\Http\Requests\CheckRequest;

class CompanysController extends Controller
{
    //
    public function index(){
        $companyList=DB::table('company')->select('*')->get();
        return view('companys.indexCompany', compact('companyList'));
    }
    public function create(){
        return view('companys.addCompany');
    }

    public function store(CheckRequest $request){
        // $request->validate([
        //     'idCompany'=>new Uppercase,
        //     'nameCompany'=>'required',
        //     'inforCompany'=>'required'
        // ]);
        $request->validated();

        $company = new Company();
        $company->MACT = $request->input('idCompany');
        $company->TENCT = $request->input('nameCompany');
        $company->THONGTIN = $request->input('inforCompany');
        $company->save();
        return redirect('/companys');

    }
    public function edit($MACT){
        $companyEdit=DB::table('company')->where('MACT', $MACT)->first();
        return view('companys.updateCompany')->with('companyEdit', $companyEdit);
    }
    public function update(CheckRequest $request, $MACT){
        $request->validated();
        $companyUpdate=DB::table('company')->where('MACT', $MACT)
                        ->update([
                            'MACT'=>$request->input('idCompany'),
                            'TENCT'=>$request->input('nameCompany'),
                            'THONGTIN'=>$request->input('inforCompany')
                        ]);
        return redirect('/companys');
    }

    public function destroy($MACT){
        $companyDelete=DB::table('company')->where('MACT', $MACT)->delete();
        return redirect('/companys');
    }
}