@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>THÊM ĐƠN HÀNG</h5>
        <form action="/orders" method="POST">
            @csrf
            <input list="customerList" type="text" name="idCustomer" placeholder="Khách hàng"><br>
            <datalist id="customerList">
                @foreach ($customerList as $row)
                    <option value="{{ $row->MAKH }}">{{ $row->TENKH }}</option>
                @endforeach
            </datalist>
            <input list="productList" type="text" name="idProduct"placeholder="Sản phẩm"><br>
            <datalist id="productList">
                @foreach ($productList as $row)
                    <option value="{{ $row->MASP }}">{{ $row->TENSP }}</option>
                @endforeach
            </datalist>
            <input type="date" name="date" placeholder="Ngày mua"><br>
            <button type="submit">Xác nhận</button>
        </form>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p class="text-danger">
                        {{ $error }}
                    </p>
                @endforeach
            </div>
        @endif
    </div>
@endsection
