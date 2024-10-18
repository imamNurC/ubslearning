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
            $table->integer('price', 20);
            $table->string('youtube_url');
            $table->timestamps();
        });

        Schema::create('transaction', function (Blueprint $table) {
            $table->id('id_transaction');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('number_phone', 15);
            $table->string('email');
            $table->unsignedBigInteger('content_id');
            $table->string('content_name', 100);
            $table->integer('price', 20);
            $table->timestamps();
            
            //relasi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('content_id')->references('id_content')->on('content')->onDelete('cascade');
        });

        Schema::create('access', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('content_id');
            $table->timestamps();

            //relasi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('content_id')->references('conten_id')->on('content')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
