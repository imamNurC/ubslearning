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
        Schema::create('content', function (Blueprint $table) {
            $table->id('id_content');
            $table->string('content_name', 100);
            $table->integer('price');
            $table->string('youtube_url');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->string('image_path')->nullable();
            $table->timestamps();
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
