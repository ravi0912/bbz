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
            $table->string('meta_description')->nullable();
            $table->string('first_image')->nullable();
            $table->string('open_graph_title')->nullable();
            $table->string('open_graph_type')->nullable();
            $table->string('open_graph_image')->nullable();
            $table->string('title')->nullable();
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
