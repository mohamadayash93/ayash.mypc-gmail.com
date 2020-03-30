<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('gifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('keywords')->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
        });

        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('query')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gif_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gifs');
        Schema::dropIfExists('histories');
        Schema::dropIfExists('favorites');

    }
}
