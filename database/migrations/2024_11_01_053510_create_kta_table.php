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
        Schema::create('kta', function (Blueprint $table) {
            $table->increments('id_kta');
            $table->string('nama_kta', 30);
            $table->string('foto_kta');
            $table->string('type')->default('mentor');
            $table->string('nickname_kta', 30);
            $table->string('nohp_kta', 15);
            $table->string('email', 30);
            $table->string('jabatan_kta', 30);
            $table->enum('status_kta', ['non-aktif', 'aktif']);
            $table->string('bergabung_kta', 10);
            $table->string('kadaluarsa_kta', 10);
            $table->string('sunting_kta', 30);
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kta');
    }
};
