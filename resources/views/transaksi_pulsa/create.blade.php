@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="card p-3 container mt-4">
    <h1>Tambah Transaksi</h1>

    <form action="{{ route('transaksi_pulsa.store') }}" method="POST">
            @csrf
            <select class="form-control mt-2" name="admin__counter_id" id="admin__counter_id" required>
                <option value="">Pilih Admin</option>
                @foreach($admin_counters as $a)
                <option value="{{ $a->id }}">{{ $a->nama_admin }}</option>
                @endforeach
            </select>
            <select class="form-control mt-2" name="pelanggan_id" id="pelanggan_id" required>
                <option value="">Pilih Pelanggan</option>
                @foreach($pelanggan as $p)
                <option value="{{ $p->id }}">{{ $p->nama_pelanggan}}</option>
                @endforeach
            </select>
             <select class="form-control mt-2" name="produk__pulsa_id" id="produk__pulsa_id" required>
                <option value="">Pilih Produk</option>
                @foreach($produk_pulsa as $d)
                <option value="{{ $d->id }}">{{ $d->nama_produk}}</option>
                @endforeach
            </select>
            <input class="form-control mt-2" type="date" name="tgl_transaksi" id="" placeholder="Tanggal Transaksi" required>
            <input class="form-control mt-2" type="number" name="jumlah" id="" placeholder="Jumlah" required>
            <input class="form-control mt-2" type="number" name="total_harga" id="" placeholder="Total Harga" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Proses"></input>
        </form>
    @endsection
