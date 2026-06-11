<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Pulsa extends Model
{
     use HasFactory;

    protected $fillable = [
        'admin__counter_id',
        'pelanggan_id',
        'produk__pulsa_id',
        'tgl_transaksi',
        'jumlah',
        'total_harga',
    ];
    public function admin__counters()
    {
        return $this->belongsTo(Admin::class, 'admin__counter_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

      public function produk_pulsa()
    {
        return $this->belongsTo(Produk_Pulsa::class, 'produk__pulsa_id');
    }
    
}
