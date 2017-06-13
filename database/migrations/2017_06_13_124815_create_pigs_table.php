<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pigs', function (Blueprint $table) {
            $table->increments('pig_id');
            $table->integer('farm_id')->unsigned();
            $table->foreign('farm_id')->references('farm_id')->on('farms');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('type_id')->on('pigTypes');
            $table->boolean('isSick');
            
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
        Schema::dropIfExists('pigs');
    }
}
