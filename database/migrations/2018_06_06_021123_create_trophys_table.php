<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrophysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trophys', function (Blueprint $table) {
            $table->increments('TrophyID');
            $table->string('TrophyName',20)->unique();
            $table->binary('TrophyIcon');
            $table->string('TrophyType',20);
            $table->text('TrophyDescription');
            $table->integer('NumberAchieved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trophys');
    }
}
