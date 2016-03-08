<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_1')->unsigned();
            $table->foreign('user_id_1')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_id_2')->unsigned();
            $table->foreign('user_id_2')->references('id')->on('users')->onDelete('cascade');
            $table->integer('connection_status');
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
        Schema::drop('connections');
    }
}
