<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // надо изменить структуру
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article_id')->nullable();
            $table->text('text')->nullable();
            $table->string('date')->nullable();
            $table->string('author')->nullable();
            $table->integer('reply_to_id')->nullable();
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
