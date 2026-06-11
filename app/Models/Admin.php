<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin__counters';

    protected $fillable = [
        'nama_admin',
        'email',
        'password'
    ];
}