@extends('layouts.index')
@section('content')
    <div class="statistical-number">
        <div class="statistical-number-style">
            <h5>SỐ LƯỢNG KHÁCH HÀNG:</h5>
            <h5>{{ $countCustomers }}</h5>
        </div>
        <div class="statistical-number-style">
            <h5>SỐ LƯỢNG ĐƠN HÀNG:</h5>
            <h5>{{ $countOrders }}</h5>
        </div>
    </div>
    <div class="statistical-list">
        <div>
            <h3>DANH SÁCH 10 KHÁCH HÀNG NGẪU NHIÊN</h3>
            <table>
                <tr>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>EMAIL</th>
                </tr>
                @foreach ($customers as $row)
                    <tr>
                        <td>{{ $row->TENKH }}</td>
                        <td>{{ $row->DIACHI }}</td>
                        <td>{{ $row->SODIENTHOAI }}</td>
                        <td>{{ $row->EMAIL }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <h3>DANH SÁCH 10 ĐƠN HÀNG GẦN NHẤT</h3>
            <table>
                <tr>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>ĐỊA CHỈ</th>
                    <th>NGÀY MUA</th>
                    <th>ĐIỆN THOẠI</th>
                </tr>
                @foreach ($orders as $rowOrder)
                    <tr>
                        <td>{{ $rowOrder->TENKH }}</td>
                        <td>{{ $rowOrder->TENSP }}</td>
                        <td>{{ $rowOrder->NGAYMUA }}</td>
                        <td>{{ $rowOrder->SODIENTHOAI }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
