<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkPreviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_preview', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('meta_description');
            $table->string('first_image');
            $table->string('open_graph_title');
            $table->string('open_graph_type');
            $table->string('open_graph_image');
            $table->string('title');
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
        Schema::drop('link_preview');
    }
}
