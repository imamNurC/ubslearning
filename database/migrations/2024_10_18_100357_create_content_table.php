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
        Schema::create('content', function (Blueprint $table) {
            $table->id('id_content');
            $table->string('content_name', 100);
            $table->integer('price');
            $table->string('youtube_url');
            $table->timestamps();
        });

        Schema::create('transaction', function (Blueprint $table) {
            $table->id('id_transaction'); 
            $table->unsignedBigInteger('id_customer'); 
            $table->string('name');
            $table->string('number_phone', 15);
            $table->string('email');
            $table->unsignedBigInteger('id_content');
            $table->string('content_name', 100);
            $table->integer('price');
            $table->timestamps();
            
            //relasi
            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
            $table->foreign('id_content')->references('id_content')->on('content')->onDelete('cascade');
        });

        Schema::create('access', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_content');
            $table->timestamps();

            //relasi
            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
            $table->foreign('id_content')->references('id_content')->on('content')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
        Schema::dropIfExists('transaction');
        Schema::dropIfExists('access');
    }
};
