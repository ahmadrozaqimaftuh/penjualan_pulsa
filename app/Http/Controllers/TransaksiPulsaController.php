<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Produk_Pulsa;
use App\Models\Transaksi_Pulsa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class TransaksiPulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi_pulsas = Transaksi_Pulsa::all();
        return view('transaksi_pulsa.index', compact('transaksi_pulsas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin_counters = Admin::all();
        $pelanggan = Pelanggan::all();
        $produk_pulsa = Produk_Pulsa::all();
    
    return view('transaksi_pulsa.create', compact('admin_counters', 'pelanggan', 'produk_pulsa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Transaksi_Pulsa::create([
            'admin__counter_id' => $request->admin__counter_id,
            'pelanggan_id' => $request->pelanggan_id,
            'produk__pulsa_id' => $request->produk__pulsa_id,
            'tgl_transaksi' => $request->tgl_transaksi,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
        ]);
        return redirect()->route('transaksi_pulsa.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi_Pulsa $transaksi_Pulsa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
          $admin_counters = Admin::all();
          $pelanggan = Pelanggan::all();
          $produk_pulsa = Produk_Pulsa::all();
          $transaksi_pulsa = Transaksi_Pulsa::findOrFail($id);
    return view('transaksi_pulsa.edit', compact('admin_counters', 'pelanggan','produk_pulsa','transaksi_pulsa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaksi_pulsa = Transaksi_Pulsa::findOrFail($id);

        $transaksi_pulsa->update([
            'admin__counter_id' => $request->admin__counter_id,
            'pelanggan_id' => $request->pelanggan_id,
            'produk__pulsa_id' => $request->produk__pulsa_id,
            'tgl_transaksi' => $request->tgl_transaksi,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
        ]);
        return redirect()->route('transaksi_pulsa.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $transaksi_pulsa = Transaksi_Pulsa::findOrFail($id);
          $transaksi_pulsa->delete();
        return redirect()->route('transaksi_pulsa.index')->with('success', 'Data berhasil dihapus');
    }
}
