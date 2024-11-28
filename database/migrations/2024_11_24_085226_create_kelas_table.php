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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->string('nama_kelas', 50);
            $table->text('deskripsi_kelas')->nullable();
            $table->timestamps();

            $table->unsignedInteger('kta_id')->nullable();  // Menggunakan unsignedBigInteger
            $table->foreign('kta_id')->references('id_kta')->on('kta')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
