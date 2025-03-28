<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatscript', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('poelink');
            $table->string('chatboxlink'); 
            $table->string('minilink');
            $table->string('adminminilink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatscript');
    }
};
