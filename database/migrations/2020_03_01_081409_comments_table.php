<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments' , function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('post_id');
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->bigInteger('posts_id');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('comments');
    }
}
