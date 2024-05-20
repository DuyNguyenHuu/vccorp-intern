@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>CHỈNH SỬA ĐƠN HÀNG</h5>
        <form>
            <input list="orderList" type="text" placeholder="Mã đơn hàng cũ"><br>
            <datalist id="orderList">
                @foreach ($orderList as $row)
                    <option value="{{ $row->MADH }}"></option>
                @endforeach
            </datalist>
            <input type="text" placeholder="Mã đơn hàng mới"><br>
            <input type="text" placeholder="Mã khách hàng mới"><br>
            <input type="text" placeholder="Mã sản phẩm mới"><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
