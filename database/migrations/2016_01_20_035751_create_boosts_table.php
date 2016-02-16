<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boosts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->integer('user_id_1')->unsigned();
            $table->foreign('user_id_1')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_id_2')->unsigned();
            $table->foreign('user_id_2')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('boosts');
    }
}
