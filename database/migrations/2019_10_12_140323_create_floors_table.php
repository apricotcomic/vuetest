<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('floors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('place_id');
            $table->string('floorName');
            $table->integer('xCoordinate');
            $table->integer('yCoordinate');
            $table->integer('zCoordinate');
            $table->string('fileName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('floors');
    }
}
