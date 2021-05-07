<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admintrators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admintrators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 25)->unique();
            $table->string('username', 25)->unique();
            $table->string('password');
            $table->string('email');
            $table->tinyInteger('level');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admintrators');
    }
}
