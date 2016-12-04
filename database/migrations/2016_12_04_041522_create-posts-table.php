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
            $table->string('body', 10000);
            $table->integer('gallery_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('post_type', ['Photography', 'Sport', 'Other']);
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
