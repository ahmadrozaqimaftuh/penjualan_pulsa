@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
    <div class="card p-3 container">
        <h1>Edit Pembayaran</h1>

        <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input class="form-control mt-2" type="text" name="metode_bayar" value="{{ $pembayaran->metode_bayar }}" placeholder="Nama Pembayaran" required>
            <input class="form-control mt-2" type="number" name="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}" placeholder="Jumlah Bayar" required>
            <input class="form-control mt-2" type="text" name="status_pembayaran" value="{{ $pembayaran->status_pembayaran }}" placeholder="Status Pembayaran" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
@endsection