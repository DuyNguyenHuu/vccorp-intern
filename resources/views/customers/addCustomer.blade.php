@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>THÊM KHÁCH HÀNG</h5>
        <form action="/customers" method="POST">
            @csrf
            <input type="text" name="idCustomer" placeholder="Mã khách hàng"><br>
            <input type="text" name="nameCustomer" placeholder="Tên khách hàng"><br>
            <input type="text" name="addressCustomer" placeholder="Địa chỉ"><br>
            <input type="text" name="phoneCustomer" placeholder="Điện thoại"><br>
            <input type="text" name="emailCustomer" placeholder="Email"><br>
            <input list="companyList" type="text" name="companyCustomer" placeholder="Công ty"><br>
            <datalist id="companyList">
                @foreach ($companyList as $row)
                    <option value="{{ $row->TENCT }}"></option>
                @endforeach
            </datalist>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
