<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Produk_Pulsa;
use App\Models\Transaksi_Pulsa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $pembayaran = Pembayaran::all();
    return view('pembayaran.create', compact('pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembayaran::create([
            'id_pembayaran' => $request->id_pembayaran,
            'metode_bayar' => $request->metode_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::all();
        $pembayaran = Pembayaran::findOrFail($id);
    return view('pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update([
            'metode_bayar' => $request->metode_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete(); 
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil dihapus');
    }
}
