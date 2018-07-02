<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('LoginID')->unique();
            $table->string('email')->unique();
            $table->string('UserName',16);
            $table->string('Password',16);
            $table->timestamp('RegistrationDate');
            $table->boolean('UnsubscribeFlg');
            $table->dateTime('UnsubscribeDate')->nullable();
            $table->dateTime('LastLoginDate');
            $table->integer('ContinuousLoginDays');
            $table->date('TotalLoginDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
