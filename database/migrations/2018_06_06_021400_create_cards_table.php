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
            $table->integer('PrefecturesID')->unsigned();
            $table->binary('CardIllustration');
            $table->text('Introduction');
            $table->binary('PRPhoto_1blob')->nullable();
            $table->binary('PRPhoto_2blob')->nullable();
            $table->binary('PRPhoto_3blob')->nullable();
            $table->binary('PRPhoto_4blob')->nullable();
            $table->binary('PRPhoto_5blob')->nullable();

            $table->foreign('PrefecturesID')->references('PrefecturesID')->on('prefectures');
        });
        DB::statement('alter table cards add location geometry' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropForeign('cards_PrefecturesID_foreign');
        });

        Schema::dropIfExists('cards');
    }
}
