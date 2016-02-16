<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pages_category_id')->unsigned();
            $table->foreign('pages_category_id')->references('id')->on('page_category')->onDelete('cascade');
            $table->integer('pages_subcategory_id')->unsigned();
            $table->foreign('pages_subcategory_id')->references('id')->on('page_subcategory')->onDelete('cascade');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('page_types')->onDelete('cascade');
            $table->string('name');
            $table->string('specialities');
            $table->string('headquarter');
            $table->longText('content');
            $table->string('page_profile_image');
            $table->string('page_cover_image');
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
        Schema::drop('pages');
    }
}
