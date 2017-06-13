<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->increments('farm_id');
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('account_id')->on('accounts');
            $table->string('farm_name');
            $table->string('farm_house');
            $table->string('farm_type');
            $table->boolean('farm_isGAP');
            $table->boolean('farm_isHACCP');
            $table->boolean('farm_isPass');
            $table->string('farm_tel');
            $table->text('farm_note');
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
        Schema::dropIfExists('farms');
    }
}
