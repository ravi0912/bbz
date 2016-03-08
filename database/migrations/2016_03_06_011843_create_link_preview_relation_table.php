<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkPreviewRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_preview_relation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->default(0);
            $table->integer('comment_id')->default(0);
            $table->integer('mail_id')->default(0);
            $table->integer('link_preview_id')->unsigned();
            $table->foreign('link_preview_id')->references('id')->on('link_preview')->onDelete('cascade');
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
        Schema::drop('link_preview_relation');
    }
}
