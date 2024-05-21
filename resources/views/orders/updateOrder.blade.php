@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>CẬP NHẬT ĐƠN HÀNG</h5>
        <form action="/orders/{{ $orderEdit->MADH }}" method="POST">
            @csrf
            @method('PUT')
            <label>MÃ KHÁCH HÀNG:</label><br>
            <input list="customerOrderEdit" type="text" name="idCustomer" value={{ $orderEdit->MAKH }}><br>
            <datalist id="customerOrderEdit">
                @foreach ($customerOrderEdit as $row)
                    <option value="{{ $row->MAKH }}">{{ $row->TENKH }}</option>
                @endforeach
            </datalist>
            <label>MÃ SẢN PHẨM: </label><br>
            <input list="productOrderEdit" type="text" name="idProduct" value={{ $orderEdit->MASP }}><br>
            <datalist id="productOrderEdit">
                @foreach ($productOrderEdit as $row)
                    <option value="{{ $row->MASP }}">{{ $row->TENSP }}</option>
                @endforeach
            </datalist>
            <label>NGAYMUA: </label><br>
            <input type="date" name="date" value={{ $orderEdit->NGAYMUA }}><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
