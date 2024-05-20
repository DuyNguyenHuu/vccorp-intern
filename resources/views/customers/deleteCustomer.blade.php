@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>XÓA KHÁCH HÀNG</h5>
        <form>
            <input list="customerList" type="text" placeholder="Khách hàng muốn xóa"><br>
            <datalist id="customerList">
                @foreach ($customerList as $row)
                    <option value="{{ $row->MAKH }}-{{ $row->TENKH }}"></option>
                @endforeach
            </datalist>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
