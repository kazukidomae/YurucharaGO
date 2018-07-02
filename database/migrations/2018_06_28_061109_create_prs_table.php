<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prs', function (Blueprint $table) {
            $table->increments('PRID');
            $table->integer('CardID')->unsigned();
            $table->integer('PrefecturesID')->unsigned();
            $table->string('PRName',100);
            $table->string('PRPhotoPath',100);
            $table->text('PRDescription');
            $table->double('latitude');
            $table->double('longitude');

            $table->foreign('CardID')->references('CardID')->on('cards');
            $table->foreign('PrefecturesID')->references('PrefecturesID')->on('prefectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prs');
    }
}
