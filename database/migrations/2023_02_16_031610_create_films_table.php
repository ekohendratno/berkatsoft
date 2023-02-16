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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->text('adult');
            $table->text('backdrop_path');
            $table->text('genre_ids');
            $table->text('original_id');
            $table->text('original_language');
            $table->text('original_title');
            $table->text('overview');
            $table->text('popularity');
            $table->text('poster_path');
            $table->text('release_date');
            $table->text('title');
            $table->text('video');
            $table->text('vote_average');
            $table->text('vote_count');
            $table->text('updated_at');
            $table->text('created_at');
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
};
