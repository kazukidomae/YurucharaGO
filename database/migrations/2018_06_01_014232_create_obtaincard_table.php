<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObtaincardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obtaincard', function (Blueprint $table) {
            $table->integer('UserID')->unsigned();
            $table->integer('CardID')->unsigned();
            $table->datetime('ObtainDate');

            $table->foreign('CardID')->references('CardID')->on('card');
            $table->foreign('UserID')->references('UserID')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obtaincard');
    }
}
