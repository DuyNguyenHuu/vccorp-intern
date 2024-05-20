<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="signin-page">
    <h1 class="tittle">Hệ thống quản lý VCCorp</h1>
    <div class="signin-box" style="height:550px">
        <div class="signin-tittle">ĐĂNG KÝ</div>
        <div class="signin-content">
            <form>
                <input type="text" placeholder="Họ tên"><br>
                <input type="text" placeholder="Địa chỉ"><br>
                <input type="text" placeholder="Số điện thoại"><br>
                <input type="text" placeholder="Email"><br>
                <input type="password" placeholder="Nhập mật khẩu"><br>
                <input type="password" placeholder="Nhập lại mật khẩu"><br>

                <button type="submit">Đăng ký</button>
                <h4>Bạn đã có tài khoản? <a href="">Đăng nhập</a></h4>
            </form>
        </div>
    </div>
</body>

</html>
