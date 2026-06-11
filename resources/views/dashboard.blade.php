@extends('layout.app')

@section('content')

<div style="
    max-width: 800px;
    margin: 40px auto;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
">

<h1 style="
    color: #007bff;
    margin-bottom: 20px;
    text-align: center;
">
    Dashboard Admin
</h1>

<div style="
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
">
    <h3>Selamat Datang</h3>

    <p>
        <strong>Nama Admin :</strong>
        {{ session('nama_admin') }}
    </p>

    <p>
        <strong>Email :</strong>
        {{ session('email') }}
    </p>
</div>

<div style="
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
">
   
    <a href="/pelanggan" style="
        text-decoration:none;
        background:#28a745;
        color:white;
        padding:10px 20px;
        border-radius:8px;
    ">
        Data Pelanggan
    </a>

    <a href="/produk_pulsa" style="
        text-decoration:none;
        background:#ffc107;
        color:white;
        padding:10px 20px;
        border-radius:8px;
    ">
        Produk Pulsa
    </a>

    <a href="/transaksi_pulsa" style="
        text-decoration:none;
        background:#17a2b8;
        color:white;
        padding:10px 20px;
        border-radius:8px;
    ">
        Transaksi
    </a>

    <a href="/pembayaran" style="
        text-decoration:none;
        background:#6f42c1;
        color:white;
        padding:10px 20px;
        border-radius:8px;
    ">
        Pembayaran
    </a>
</div>

<hr style="margin:25px 0;">

</div>

@endsection
