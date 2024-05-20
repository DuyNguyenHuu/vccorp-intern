@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>XÓA ĐƠN HÀNG</h5>
        <form>
            <input list="orderList" type="text" placeholder="Đơn hàng muốn xóa"><br>
            <datalist id="orderList">
                @foreach ($orderList as $row)
                    <option value="{{ $row->MADH }}"></option>
                @endforeach
            </datalist>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
