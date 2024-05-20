@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>CẬP NHẬT CÔNG TY</h5>
        <form>
            <input list="companyList" type="text" placeholder="Công ty muốn sửa"><br>
            <datalist id="companyList">
                @foreach ($companyList as $row)
                    <option value="{{ $row->MACT }}-{{ $row->TENCT }}"></option>
                @endforeach
            </datalist>
            <input type="text" placeholder="Mã công ty mới"><br>
            <input type="text" placeholder="Tên công ty mới"><br>
            <input type="text" placeholder="Thông tin mới"><br>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
