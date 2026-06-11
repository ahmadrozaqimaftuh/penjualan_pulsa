@extends('layout.blank')

@section('title', 'Edit Pelanggan')

@section('content')
    <div class="container">
        <h1>Edit Pelanggan</h1>

        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input class="form-control mt-2" type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" placeholder="Nama Pelanggan" required>
            <input class="form-control mt-2" type="number" name="no_hp" value="{{ $pelanggan->no_hp }}" placeholder="No Hp" required>
            <input class="form-control mt-2 btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
@endsection