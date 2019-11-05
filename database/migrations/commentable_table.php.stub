<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentableTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(config('commentable.table_name'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('commentable');
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->text('comment');
            $table->ipAddress('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(config('commentable.table_name'));
    }
}
