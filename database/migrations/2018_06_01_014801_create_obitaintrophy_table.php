<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObitaintrophyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obitaintrophy', function (Blueprint $table) {
            $table->integer('UserID')->unsigned();
            $table->integer('TrophyID')->unsigned();
            $table->datetime('ObtainDate');

            $table->foreign('TrophyID')->references('TrophyID')->on('trophy');
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
        Schema::dropIfExists('obitaintrophy');
    }
}
