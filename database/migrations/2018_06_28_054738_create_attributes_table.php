<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('AttributeID');
            $table->string('AttributeName',50);
            $table->string('AttributeIconPath',100);
            $table->string('CardDesignPath',100);
        });

        Schema::table('cards', function (Blueprint $table) {
            $table->foreign('AttributeID')->references('AttributeID')->on('attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
