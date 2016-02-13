<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function(Blueprint $table){
           $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->integer('user_id_2')->unsigned();
           $table->integer('pages_id')->unsigned();
           $table->integer('group_id')->unsigned();
           $table->integer('skill_id')->unsigned();
           $table->integer('viewed_profile_id')->unsigned();
           $table->integer('status_id')->unsigned();
           $table->longText('notification');
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
        Schema::dropIfExists('notifications');
    }
}
