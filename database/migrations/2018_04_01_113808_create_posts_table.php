<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('title');
            $table->text('content');
            $table->unsignedInteger('views_count')
                ->default(0)->comment('浏览次数');
            $table->unsignedInteger('category_id')->index()->comment('分类表id');
            $table->unsignedInteger('user_id')->index()->comment('作者id');
            $table->unsignedInteger('last_reply_id')->comment('最后一次回复的回复表id');
            $table->unsignedInteger('reply_count')->default(0)->index()->commnet('回复数量');
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
        Schema::dropIfExists('posts');
    }
}
