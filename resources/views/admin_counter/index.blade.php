@extends('layout.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Admin</h2>
    <a href="{{ route('admin_counter.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>Tambah Admin</a>
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
                        <th>Nama Admin</th>
                        <th>No Hp</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($admin_counters as $admin_counters)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $admin_counters->nama_admin }}</td>
                        <td>{{ $admin_counters->no_hp }}</td>
                        <td>
                            <a href="{{ route('admin_counter.edit', $admin_counters->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>Edit
                            </a>
                            <form action="{{ route('admin_counter.destroy', $admin_counters->id) }}" method="POST" class="d-inline">
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