<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanysController extends Controller
{
    //
    public function create(){
        return view('companys.addCompany');
    }

    public function store(Request $request){
        $company = new Company();
        $company->MACT = $request->input('idCompany');
        $company->TENCT = $request->input('nameCompany');
        $company->THONGTIN = $request->input('inforCompany');
        $company->save();
        return redirect('/companys/create');

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