<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('UFID');
            $table->integer('UJID');
            $table->integer('UDID');
            $table->integer('subUUID');
            $table->integer('stafUUID');
            $table->integer('Q1rate');
            $table->integer('Q2rate');
            $table->integer('Q3rate');
            $table->text('Q1tx');
            $table->text('Q2tx');
            $table->text('Q3tx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
