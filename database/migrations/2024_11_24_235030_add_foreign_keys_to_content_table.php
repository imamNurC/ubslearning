<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('content', function (Blueprint $table) {
            // Menambahkan foreign key kelas_id yang merujuk ke id_kelas di tabel kelas
            $table->unsignedBigInteger('kelas_id')->nullable();  // Menggunakan unsignedBigInteger
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');

            // Menambahkan foreign key kta_id yang merujuk ke id_kta di tabel kta
            $table->unsignedInteger('kta_id')->nullable();  // Menggunakan unsignedBigInteger
            $table->foreign('kta_id')->references('id_kta')->on('kta')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('content', function (Blueprint $table) {
            //
        });
    }
};
