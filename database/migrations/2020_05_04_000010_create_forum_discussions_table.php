<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration auto-generated by TablePlus 2.12(282).
 *
 * @author https://tableplus.com
 * @source https://github.com/TablePlus/tabledump
 */
class CreateForumDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('forum_discussions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200);
            $table->string('slug', 255);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->integer('participant_count')->unsigned()->default(0);
            $table->integer('post_number_index')->unsigned()->default(0);
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('first_post_id')->unsigned()->nullable();
            $table->datetime('last_posted_at')->nullable();
            $table->bigInteger('last_posted_user_id')->unsigned()->nullable();
            $table->bigInteger('last_post_id')->unsigned()->nullable();
            $table->tinyInteger('is_private')->default(0);
            $table->tinyInteger('is_approved')->default(0);
            $table->tinyInteger('is_locked')->default(0);
            $table->tinyInteger('is_sticky')->default(0);
            $table->softDeletes();
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('forum_discussions');
    }
}
