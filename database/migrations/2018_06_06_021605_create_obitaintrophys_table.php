<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObitaintrophysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obitaintrophys', function (Blueprint $table) {
            $table->integer('UserID')->unsigned();
            $table->integer('TrophyID')->unsigned();
            $table->datetime('ObtainDate');
            
            $table->foreign('TrophyID')->references('TrophyID')->on('trophys');
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
        $table->dropForeign('TrophyID');
        $table->dropForeign('UserID');
        Schema::dropIfExists('obitaintrophys');
    }
}
