@extends('layout.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Pembayaran</h2>
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>Tambah Pembayaran</a>
    </div>
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-primary">
                    <tr>
                        <th width="10%">No</th>
                        <th>Metode Pembayaran</th>
                        <th>Jumlah Bayar</th>
                        <th>Status Pembayaran</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pembayaran as $pembayaran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pembayaran->metode_bayar }}</td>
                        <td>{{ $pembayaran->jumlah_bayar }}</td>
                        <td>{{ $pembayaran->status_pembayaran }}</td>
                        <td>
                            <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>Edit
                            </a>
                            <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" class="d-inline">
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
    @endsection