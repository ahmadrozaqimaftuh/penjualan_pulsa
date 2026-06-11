@extends('layout.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Transaksi</h2>
    <a href="{{ route('transaksi_pulsa.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>Tambah Transaksi</a>
    </div>
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="card shadow-sm">
    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-primary">
                    <tr>
                        <th width="10%">No</th>
                        <th>Nama Admin</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Produk</th>
                        <th>Tgl Transaksi</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transaksi_pulsas as $transaksi_pulsas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $transaksi_pulsas->admin__counters->nama_admin}}</td>
                        <td>{{ $transaksi_pulsas->pelanggan->nama_pelanggan}}</td>
                        <td>{{ $transaksi_pulsas->produk_pulsa->nama_produk}}</td>
                        <td>{{ $transaksi_pulsas->tgl_transaksi}}</td>
                        <td>{{ $transaksi_pulsas->jumlah}}</td>
                        <td>{{ $transaksi_pulsas->total_harga}}</td>
                        <td>
                            <a href="{{ route('transaksi_pulsa.edit', $transaksi_pulsas->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>Edit
                            </a>
                            <form action="{{ route('transaksi_pulsa.destroy', $transaksi_pulsas->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">
                                    <i class="bi bi-trash"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Data belum tersedia</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>
</div>
        </div>
    </div>
    @endsection