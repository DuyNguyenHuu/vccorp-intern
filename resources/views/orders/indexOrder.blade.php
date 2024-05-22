@extends('layouts.index')
@section('content')
    <h1>Danh sách đơn hàng</h1>
    <a href="orders/create" class="btn btn-primary" role="button">Thêm đơn hàng mới</a>
    @foreach ($orderList as $row)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $row->MADH }}</div>
                <label>Mã khách hàng: </label>{{ $row->MAKH }}<br>
                <label>Tên khách hàng: </label>{{ $row->TENKH }}<br>
                <label>Mã sản phẩm: </label>{{ $row->MASP }}<br>
                <label>Tên sản phẩm: </label>{{ $row->TENSP }}<br>
                <label>Ngày mua: </label>{{ $row->NGAYMUA }}
            </div>
            <a href="orders/{{ $row->MADH }}/edit">Chỉnh sửa</a>
            <form action="/orders/{{ $row->MADH }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Xóa
                </button>
            </form>
        </li>
    @endforeach
@endsection
