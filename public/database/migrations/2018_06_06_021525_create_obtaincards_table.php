<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObtaincardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obtaincards', function (Blueprint $table) {
            $table->integer('UserID')->unsigned();
            $table->integer('CardID')->unsigned();
            $table->datetime('ObtainDate');

            $table->foreign('CardID')->references('CardID')->on('cards');
            $table->foreign('UserID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obtaincards', function (Blueprint $table) {
            $table->dropForeign('obtaincards_CardID_foreign');
            $table->dropForeign('obtaincards_UserID_foreign');
        });

        Schema::dropIfExists('obtaincards');
    }
}
