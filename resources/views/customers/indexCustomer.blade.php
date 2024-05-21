@extends('layouts.index')
@section('content')
    <h1>Danh sách khách hàng</h1>
    <a href="customers/create" class="btn btn-primary" role="button">Thêm khách hàng mới</a>
    @foreach ($customerList as $row)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="ms-2 me-auto">
                <div>{{ $row->MAKH }}</div>
                <label>Tên khách hàng: </label>{{ $row->TENKH }}<br>
                <label>Địa chỉ: </label>{{ $row->DIACHI }}<br>
                <label>Số điện thoại: </label>{{ $row->SODIENTHOAI }}<br>
                <label>Email: </label>{{ $row->EMAIL }}
            </div>
            <a href="customers/{{ $row->MAKH }}/edit">Chỉnh sửa</a>
            <form action="/customers/{{ $row->MAKH }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Xóa
                </button>
            </form>
        </li>
    @endforeach
@endsection
