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
            $table->string('account_name');
            $table->string('account_surname');
            $table->string('account_email');
            $table->string('account_pass');
            $table->string('account_sex', 10);
            $table->date('account_DOB');
            $table->string('account_mobile', 10);
            $table->string('account_nation');
            $table->string('account_edu');
            $table->string('account_status');
            $table->string('account_hno', 15);
            $table->string('account_moo', 10);
            $table->string('account_soi');
            $table->string('account_road');
            $table->string('account_dis');
            $table->string('account_subdis');
            $table->string('account_province');
            $table->string('account_postID', 5);
            $table->string('account_facebook');
            $table->string('account_line');
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
        Schema::dropIfExists('accounts');
    }
}
