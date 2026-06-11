<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_Pulsa extends Model
{
      use HasFactory;

     protected $fillable = [
        'produk__pulsas_id',
        'nama_produk',
        'operator',
        'nominal',
        'harga',
    ];
}
