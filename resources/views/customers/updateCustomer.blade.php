@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>CẬP NHẬT KHÁCH HÀNG</h5>
        <form>
            <input list="customerList" type="text" placeholder="Khách hàng muốn sửa"><br>
            <datalist id="customerList">
                @foreach ($customerList as $row)
                    <option value="{{ $row->MAKH }}-{{ $row->TENKH }}"></option>
                @endforeach
            </datalist>
            <input type="text" placeholder="Tên khách hàng mới"><br>
            <input type="text" placeholder="Địa chỉ mới"><br>
            <input type="text" placeholder="Điện thoại mới"><br>
            <input type="text" placeholder="Email mới"><br>
            <input list="companyList" type="text" placeholder="Công ty mới"><br>
            <datalist id="companyList">
                @foreach ($companyList as $row)
                    <option value="{{ $row->TENCT }}"></option>
                @endforeach
            </datalist>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
