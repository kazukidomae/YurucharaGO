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
        Schema::table('obitaintrophys', function (Blueprint $table){
            $table->dropForeign('obitaintrophys_TrophyID_foreign');
            $table->dropForeign('obitaintrophys_UserID_foreign');
        });


        Schema::dropIfExists('obitaintrophys');
    }
}
