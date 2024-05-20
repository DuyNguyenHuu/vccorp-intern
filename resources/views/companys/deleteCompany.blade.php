@extends('layouts.index')
@section('content')
    <div class="form-customer">
        <h5>XÓA CÔNG TY</h5>
        <form>
            <input list="companyList" type="text" placeholder="Công ty muốn xóa"><br>
            <datalist id="companyList">
                @foreach ($companyList as $row)
                    <option value="{{ $row->MACT }}-{{ $row->TENCT }}"></option>
                @endforeach
            </datalist>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
