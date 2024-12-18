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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id_customer');
            $table->enum('type', ['admin', 'user'])->default('user');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->boolean('is_active')->default(false);
            $table->string('nama_provinsi')->nullable();;
            $table->string('nama_kab_kota')->nullable();;
            $table->string('nama_kecamatan')->nullable();;
            $table->string('nama_kelurahan')->nullable();;
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('password');
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
