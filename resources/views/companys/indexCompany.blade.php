@extends('layouts.index')
@section('content')
    <h1>Danh sách công ty</h1>
    <a href="companys/create" class="btn btn-primary" role="button">Thêm công ty mới</a>
    @foreach ($companyList as $row)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $row->MACT }}</div>
                <label>Tên công ty: </label>{{ $row->TENCT }}<br>
                <label>Thông tin công ty: </label>{{ $row->THONGTIN }}
            </div>
            <a href="companys/{{ $row->MACT }}/edit">Chỉnh sửa</a>
            <form action="/companys/{{ $row->MACT }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Xóa
                </button>
            </form>
        </li>
    @endforeach
@endsection
