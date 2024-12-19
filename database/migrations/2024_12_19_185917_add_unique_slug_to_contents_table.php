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
            //
            $table->string('slug')->unique()->nullable()->after('content_name');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('content', function (Blueprint $table) {
            //
            $table->dropUnique(['slug']);
        });
    }
};
