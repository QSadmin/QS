<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('UJID');
            $table->integer('UDID');
            $table->integer('ULID');
            $table->integer('byUUID');
            $table->integer('stafUUID');
            $table->date('startDate');
            $table->date('endDate');
            $table->time('startTime');
            $table->time('endTime');
            $table->integer('feedback');
            $table->integer('assignedUUID');
            $table->string('note');
            $table->integer('canceled_0_UUID');
            $table->integer('canceled_0_by');
            $table->DateTime('canceled_0_at');
            $table->integer('canceled_1_UUID');
            $table->integer('canceled_1_by');
            $table->DateTime('canceled_1_at');
            $table->integer('canceled_2_UUID');
            $table->integer('canceled_2_by');
            $table->DateTime('canceled_2_at');
            $table->integer('canceled_3_UUID');
            $table->integer('canceled_3_by');
            $table->DateTime('canceled_3_at');
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
        Schema::dropIfExists('jobs');
    }
}
