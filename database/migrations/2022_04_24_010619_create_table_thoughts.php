<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thoughts', function (Blueprint $table) {
            $table->id();
            $table->string('lyric');
            $table->string('youtube_id');
            $table->integer('time');
            $table->integer('book_id');
            $table->foreign('book_id')
            ->references('books')
            ->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thoughts');
    }
};
