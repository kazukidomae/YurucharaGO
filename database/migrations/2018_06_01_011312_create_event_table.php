<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('EventID');
            $table->string('EventName',50);
            $table->integer('CardID')->unsigned();
            $table->dateTime('EventDate');
            $table->dateTime('EndDate');
            $table->string('EventSiteURL',100);

            $table->foreign('CardID')->references('CardID')->on('card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
