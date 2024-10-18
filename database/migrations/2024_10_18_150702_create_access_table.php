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
        Schema::create('access', function (Blueprint $table) {
            $table->bigInteger('id_customer')->unsigned();
            $table->bigInteger('id_content')->unsigned();
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
            $table->foreign('id_content')->references('id_content')->on('content')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access');
    }
};
