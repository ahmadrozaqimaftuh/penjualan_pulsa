<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tambah Pelanggan')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
body{
    background: #f4f6f9;
}

.form-box{
    background: #fff;
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.form-control{
    border-radius: 10px;
    padding: 12px;
}

.form-control:focus{
    box-shadow: none;
    border-color: #0d6efd;
}

.btn{
    border-radius: 10px;
    padding: 10px;
    font-weight: 600;
}
</style>
<body>

    @yield('content')

</body>
</html>