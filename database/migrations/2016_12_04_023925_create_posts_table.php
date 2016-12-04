<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('intro', 300);
            $table->text('body');
            $table->integer('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('gallery');
            $table->foreign('gallery_id')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')->onDelete('cascade');
            $table->enum('post-type', ['Photography', 'Sport', 'Other']);
            $table->enum('post_status', ['Pending', 'Published']);
            $table->timestamps();
            $table->timestamp('published_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
