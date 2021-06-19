<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('starring');
            $table->string('director');
            $table->foreignId('censor_rating_id');
            $table->foreignId('genre_id');
            $table->longText('synopsis');
            $table->string('language');
            $table->integer('duration');
            $table->string('banner');
            $table->date('since');
            $table->string('trailer_link');
            $table->string('status');
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
        Schema::dropIfExists('films');
    }
}
