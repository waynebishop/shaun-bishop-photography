<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images_title', 30);
            $table->string('images_description', 100);
            $table->integer('gallery_id')->unsigned();
            $table->string('images_alt_text', 300);
            $table->string('images_location', 300);
            $table->integer('images_position')->unsigned();
            $table->timestamps();

            $table->foreign('gallery_id')
                    ->references('id')
                    ->on('galleries')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
