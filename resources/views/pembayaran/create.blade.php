@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')

<div class="card p-3 container mt-4">
    <h1>Tambah Pembayaran</h1>

    <form action="{{ route('pembayaran.store') }}" method="post">
            @csrf
            <input class="form-control mt-2" type="text" name="metode_bayar" id="" placeholder="Metode Pembayaran" required>
            <input class="form-control mt-2" type="number" name="jumlah_bayar" id="" placeholder="Jumlah Bayar" required>
            <input class="form-control mt-2" type="text" name="status_pembayaran" id="" placeholder="Status Pembayaran" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Proses"></input>
        </form>
@endsection