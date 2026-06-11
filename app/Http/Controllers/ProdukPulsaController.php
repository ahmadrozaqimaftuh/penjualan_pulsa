<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Produk_Pulsa;
use App\Models\Transaksi_Pulsa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class ProdukPulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $produk_pulsa = Produk_Pulsa::all();
        return view('produk_pulsa.index', compact('produk_pulsa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk_pulsa = Produk_Pulsa::all();
    return view('produk_pulsa.create', compact('produk_pulsa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk_Pulsa::create([
            'id_produk_pulsa' => $request->id_produk_pulsa,
            'nama_produk' => $request->nama_produk,
            'operator' => $request->operator,
            'nominal' => $request->nominal,
            'harga' => $request->harga,
        ]);
        return redirect()->route('produk_pulsa.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk_Pulsa $produk_Pulsa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk_pulsa = Produk_Pulsa::all();
        $produk_pulsa = Produk_Pulsa::findOrFail($id);
    return view('produk_pulsa.edit', compact('produk_pulsa'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
    {
        $produk_pulsa = Produk_Pulsa::findOrFail($id);

        $produk_pulsa->update([
            'nama_produk' => $request->nama_produk,
            'operator' => $request->operator,
            'nominal' => $request->nominal,
            'harga' => $request->harga,
        ]);
        return redirect()->route('produk_pulsa.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk_pulsa = Produk_Pulsa::findOrFail($id);
        $produk_pulsa->delete(); 
        return redirect()->route('produk_pulsa.index')->with('success', 'Data berhasil dihapus');
    }
}
