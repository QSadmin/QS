<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubavailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subavail', function (Blueprint $table) {
            $table->increments('UAID');
            $table->integer('UUID');
            $table->DateTime('startDate_0');
            $table->DateTime('endDate_0');
            $table->DateTime('startDate_1');
            $table->DateTime('endDate_1');
            $table->DateTime('startDate_2');
            $table->DateTime('endDate_2');
            $table->DateTime('startDate_3');
            $table->DateTime('endDate_3');
            $table->DateTime('startDate_4');
            $table->DateTime('endDate_4');
            $table->DateTime('startDate_5');
            $table->DateTime('endDate_5');
            $table->DateTime('startDate_6');
            $table->DateTime('endDate_6');
            $table->DateTime('startDate_7');
            $table->DateTime('endDate_7');
            $table->DateTime('startDate_8');
            $table->DateTime('endDate_8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subavail');
    }
}
