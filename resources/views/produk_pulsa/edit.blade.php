@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
    <div class="card p-3 container">
        <h1>Edit Produk</h1>

        <form action="{{ route('produk_pulsa.update', $produk_pulsa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input class="form-control mt-2" type="text" name="nama_produk" value="{{ $produk_pulsa->nama_produk }}" placeholder="Nama Produk" required>
            <input class="form-control mt-2" type="text" name="operator" value="{{ $produk_pulsa->operator }}" placeholder="Operator" required>
            <input class="form-control mt-2" type="integer" name="nominal" value="{{ $produk_pulsa->nominal}}" placeholder="Nominal" required>
            <input class="form-control mt-2" type="integer" name="harga" value="{{ $produk_pulsa->harga }}" placeholder="Harga" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
 @endsection