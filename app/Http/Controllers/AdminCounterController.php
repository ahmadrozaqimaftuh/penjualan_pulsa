<?php

namespace App\Http\Controllers;

use App\Models\Admin_Counter;
use App\Models\Pelanggan;
use App\Models\Produk_Pulsa;
use App\Models\Transaksi_Pulsa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class AdminCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_counters = Admin_Counter::all();
        return view('admin_counter.index', compact('admin_counters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin_counters = Admin_Counter::all();
    return view('admin_counter.create', compact('admin_counters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Admin_Counter::create([
            'id_admin' => $request->id_admin,
            'nama_admin' => $request->nama_admin,
            'no_hp' => $request->no_hp,
        ]);
        return redirect()->route('admin_counter.index')
        ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin_Counter $admin_Counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin_counters = Admin_Counter::all();
        $admin_counters = Admin_Counter::findOrFail($id);
    return view('admin_counter.edit', compact('admin_counters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $admin_counters = Admin_Counter::findOrFail($id);

        $admin_counters->update([
            'nama_admin' => $request->nama_admin,
            'no_hp' => $request->no_hp,
        ]);
        return redirect()->route('admin_counter.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin_counters = Admin_Counter::findOrFail($id);
        $admin_counters->delete(); 
        return redirect()->route('admin_counter.index')->with('success', 'Data berhasil dihapus');
    }
}
