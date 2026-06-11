<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi__pulsas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin__counter_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pelanggan_id')->constrained()->cascadeOnDelete();
            $table->foreignId('produk__pulsa_id')->constrained()->cascadeOnDelete();
            $table->date('tgl_transaksi');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi__pulsas');
    }
};
