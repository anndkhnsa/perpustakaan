<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('buku_id')->constrained()->onDelete('cascade');
            $table->integer('kode')->unique();
            $table->date('tgl_peminjaman')->default(now());
            $table->date('tgl_kembali');
            // $table->foreignId('_id')->constrained()->onDelete('cascade');
            $table->date('dikembalikan')->nullable();
            $table->enum('status', ['diproses', 'dipinjam', 'dikembalikan'])->default('diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamans');
    }
};
