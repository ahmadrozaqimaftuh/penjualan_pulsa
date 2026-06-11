<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nama</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <h1>Edit Nama</h1>

        <form action="{{ route('admin_counter.update', $admin_counters->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input class="form-control mt-2" type="text" name="nama_admin" value="{{ $admin_counters->nama_admin }}" placeholder="Nama Admin" required>
            <input class="form-control mt-2" type="number" name="no_hp" value="{{ $admin_counters->no_hp }}" placeholder="No Hp" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
</body>

</html>