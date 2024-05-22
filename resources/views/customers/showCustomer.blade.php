@extends('layouts.index')
@section('content')
    <h1>Danh sách mua hàng</h1>
    @foreach ($customerShow as $row)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="ms-2 me-auto">
                <label>Mã sản phẩm: {{ $row->MASP }}</label><br>
                <label>Tên sản phẩm: {{ $row->TENSP }}</label><br>
                <label>Ngày mua: {{ $row->NGAYMUA }}</label><br>
                <label>Giá: {{ $row->GIASP }} đồng</label>
            </div>
        </li>
    @endforeach
@endsection
