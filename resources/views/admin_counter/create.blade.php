<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Tambah </title>
</head>
<body>

<div class="container mt-4">
    <h1>Tambah </h1>

    <form action="{{ route('admin_counter.store') }}" method="post">
            @csrf
            <input class="form-control mt-2" type="text" name="nama_admin" id="" placeholder="Nama Admin" required>
            <input class="form-control mt-2" type="number" name="no_hp" id="" placeholder="No Hp" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Proses"></input>
        </form>

</body>
</html>
