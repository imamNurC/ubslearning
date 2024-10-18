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
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id_transaction');
            $table->bigInteger('id_customer')->unsigned();
            $table->string('name', 255);
            $table->string('number_phone', 15);
            $table->string('email', 255);
            $table->bigInteger('id_content')->unsigned();
            $table->string('content_name', 100);
            $table->integer('price');
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
        Schema::dropIfExists('transaction');
    }
};
