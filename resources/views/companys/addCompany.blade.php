@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>THÊM CÔNG TY</h5>
        <form action="/companys" method="POST">
            @csrf
            <input type="text" name="idCompany" placeholder="Mã công ty"><br>
            <input type="text" name="nameCompany" placeholder="Tên công ty"><br>
            <input type="text" name="inforCompany" placeholder="Thông tin"><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
