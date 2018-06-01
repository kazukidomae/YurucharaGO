<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->increments('CardID');
            $table->string('CardName',20);
            $table->integer('PrefecturesID')->unsigned();
            $table->binary('CardIllustration');
            $table->text('Introduction');
            $table->binary('PRPhoto_1blob');
            $table->binary('PRPhoto_2blob');
            $table->binary('PRPhoto_3blob');
            $table->binary('PRPhoto_4blob');
            $table->binary('PRPhoto_5blob');
            $table->float('latitude');
            $table->float('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card');
    }
}
