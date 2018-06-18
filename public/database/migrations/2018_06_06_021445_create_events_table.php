<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('EventID');
            $table->string('EventName',50);
            $table->integer('CardID')->unsigned();
            $table->dateTime('EventDate');
            $table->dateTime('EndDate');
            $table->string('EventSiteURL',100);

            $table->foreign('CardID')->references('CardID')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_CardID_foreign');
        });

        Schema::dropIfExists('events');
    }
}
