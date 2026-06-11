<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

     protected $fillable = [
        'metode_bayar',
        'jumlah_bayar',
        'status_pembayaran',
    ];
}
