<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('CardID');
            $table->string('CardName',20);
            $table->string('CardIllustrationPath',100);
            $table->text('CardDescription');
            $table->integer('AttributeID')->unsigned();
            $table->integer('PrefecturesID')->unsigned();

            $table->foreign('PrefecturesID')->references('PrefecturesID')->on('prefectures');
        });

        //DB::statement('alter table cards add location geometry' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
