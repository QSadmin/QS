<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first');
            $table->string('email')->unique();
            $table->string('password');
            $table->decimal('rating');
            $table->rememberToken();
            $table->integer('r1');
            $table->integer('r2');
            $table->integer('r3');
            $table->string('pic');
            $table->string('job title');
            $table->string('certs');
            $table->string('primary phone');
            $table->string('secondary phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
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
        Schema::dropIfExists('users');
    }
}
