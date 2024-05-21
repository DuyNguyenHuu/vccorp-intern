@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>CẬP NHẬT KHÁCH HÀNG</h5>
        <form action="/customers/{{ $customerEdit->MAKH }}" method="POST">
            @csrf
            @method('PUT')
            <label>MÃ KHÁCH HÀNG:</label><br>
            <input type="text" name="idCustomer" value={{ $customerEdit->MAKH }}><br>
            <label>TÊN KHÁCH HÀNG: </label><br>
            <input type="text" name="nameCustomer" value={{ $customerEdit->TENKH }}><br>
            <label>ĐỊA CHỈ: </label><br>
            <input type="text" name="addressCustomer" value={{ $customerEdit->DIACHI }}><br>
            <label>SỐ ĐIỆN THOẠI: </label><br>
            <input type="text" name="phoneCustomer" value={{ $customerEdit->SODIENTHOAI }}><br>
            <label>EMAIL: </label><br>
            <input type="text" name="emailCustomer" value={{ $customerEdit->EMAIL }}><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
