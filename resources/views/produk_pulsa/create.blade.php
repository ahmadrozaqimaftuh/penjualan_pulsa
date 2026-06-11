@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="container mt-4">
    <h1>Tambah Produk</h1>

    <form action="{{ route('produk_pulsa.store') }}" method="post">
            @csrf
            <input class="form-control mt-2" type="text" name="nama_produk" id="" placeholder="Nama Produk" required>
            <input class="form-control mt-2" type="text" name="operator" id="" placeholder="Operator" required>
            <input class="form-control mt-2" type="integer" name="nominal" id="" placeholder="Nominal" required>
            <input class="form-control mt-2" type="integer" name="harga" id="" placeholder="Harga" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Proses"></input>
        </form>
 @endsection
