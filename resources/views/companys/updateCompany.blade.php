@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>CẬP NHẬT CÔNG TY</h5>
        <form action="/companys/{{ $companyEdit->MACT }}" method="POST">
            @csrf
            @method('PUT')
            <label>MÃ CÔNG TY:</label><br>
            <input type="text" name="idCompany" value={{ $companyEdit->MACT }}><br>
            <label>TÊN CÔNG TY: </label><br>
            <input type="text" name="nameCompany" value={{ $companyEdit->TENCT }}><br>
            <label>THÔNG TIN: </label><br>
            <input type="text" name="inforCompany" value={{ $companyEdit->THONGTIN }}><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
