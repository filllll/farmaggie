<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('account_id');
            $table->string('account_title');
            $table->string('account_name', 20);
            $table->string('account_surname', 20);
            $table->string('account_email', 30);
            $table->string('account_pass', 30);
            $table->string('account_sex', 10);
            $table->date('account_DOB');
            $table->string('account_mobile', 10);
            $table->string('account_nation', 30);
            $table->string('account_edu');
            $table->string('account_status', 15);
            $table->string('account_hno', 15);
            $table->string('account_moo', 10);
            $table->string('account_soi', 30);
            $table->string('account_road', 30);
            $table->string('account_dis', 30);
            $table->string('account_subdis', 30);
            $table->string('account_province', 30);
            $table->string('account_postID', 5);
            $table->string('account_facebook', 30);
            $table->string('account_line', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
