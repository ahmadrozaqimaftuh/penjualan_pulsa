@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="card p-3 container mt-4">
    <h1>Tambah Pelanggan</h1>

    <form action="{{ route('pelanggan.store') }}" method="post">
            @csrf
            <input class="form-control mt-2" type="text" name="nama_pelanggan" id="" placeholder="Nama Pelanggan" required>
            <input class="form-control mt-2" type="number" name="no_hp" id="" placeholder="No Hp" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Proses"></input>
        </form>

@endsection