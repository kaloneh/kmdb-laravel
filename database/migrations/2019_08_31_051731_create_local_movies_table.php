<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_movies', function (Blueprint $table) {
            $table->integer('id')->index()->autoIncrement();
            $table->string('absolutePath');
            $table->string('primaryTitle')->nullable(true);
            $table->string('originalTitle')->nullable(true);
            $table->integer('startYear')->nullable(true);
            $table->integer('endYear')->nullable(true);
            $table->string('category');
            $table->string('mediainfo');
            $table->string('tconst')->nullable(true);
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_movies');
    }
}
