@extends('layout.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Produk Pulsa</h2>
    <a href="{{ route('produk_pulsa.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>Tambah Produk</a>
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
                        <th>Nama Produk</th>
                        <th>Operator</th>
                        <th>Nominal</th>
                        <th>Harga</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produk_pulsa as $produk_pulsa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produk_pulsa->nama_produk }}</td>
                        <td>{{ $produk_pulsa->operator }}</td>
                        <td>{{ $produk_pulsa->nominal }}</td>
                        <td>{{ $produk_pulsa->harga}}</td>
                        <td>
                            <a href="{{ route('produk_pulsa.edit', $produk_pulsa->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>Edit
                            </a>
                            <form action="{{ route('produk_pulsa.destroy', $produk_pulsa->id) }}" method="POST" class="d-inline">
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