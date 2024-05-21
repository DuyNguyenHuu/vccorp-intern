@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>THÊM KHÁCH HÀNG</h5>
        <form action="/customers" method="POST">
            @csrf
            <input type="text" name="idCustomer" placeholder="Mã khách hàng"><br>
            <input type="text" name="nameCustomer" placeholder="Tên khách hàng"><br>
            <input type="text" name="addressCustomer" placeholder="Địa chỉ"><br>
            <input type="text" name="phoneCustomer" placeholder="Số điện thoại"><br>
            <input type="text" name="emailCustomer" placeholder="Email"><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
