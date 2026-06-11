@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
    <div class="container">
        <h1>Edit Transaksi</h1>

        <form action="{{ route('transaksi_pulsa.update', $transaksi_pulsa->id) }}" method="post">
            @csrf
            @method('PUT')
            <select class="form-control mt-2" name="admin__counter_id" id="admin__counter_id" required>
                <option value="">Pilih Admin</option>
                @foreach($admin_counters as $a)
                <option value="{{ $a->id }}" @selected($transaksi_pulsa->admin__counter_id == $a->id)>{{ $a->nama_admin }}</option>
                @endforeach
            </select>
            <select class="form-control mt-2" name="pelanggan_id" id="pelanggan_id" required>
                <option value="">Pilih Pelanggan</option>
                @foreach($pelanggan as $p)
                <option value="{{ $p->id }}" @selected($transaksi_pulsa->pelanggan_id == $p->id)>{{ $p->nama_pelanggan }}</option>
                @endforeach
            </select>
             <select class="form-control mt-2" name="produk__pulsa_id" id="produk__pulsa_id" required>
                <option value="">Pilih Produk</option>
                @foreach($produk_pulsa as $d)
                <option value="{{ $d->id }}" @selected($transaksi_pulsa->produk__pulsa_id == $d->id)>{{ $d->nama_produk }}</option>
                @endforeach
            </select>
            <input class="form-control mt-2" type="date" name="tgl_transaksi"  value="{{ $transaksi_pulsa->tgl_transaksi }}" placeholder="Tanggal Transaksi" required>
            <input class="form-control mt-2" type="number" name="jumlah"  value="{{ $transaksi_pulsa->jumlah }}" placeholder="Jumlah" required>
            <input class="form-control mt-2" type="number" name="total_harga"  value="{{ $transaksi_pulsa->total_harga }}" placeholder="Total Harga" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
    @endsection