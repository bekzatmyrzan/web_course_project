<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_club_id');
            $table->foreign('home_club_id')->references('id')->on('club_models')->onDelete('cascade');
            $table->unsignedBigInteger('guest_club_id');
            $table->foreign('guest_club_id')->references('id')->on('club_models')->onDelete('cascade');
            $table->unsignedBigInteger('round_id');
            $table->foreign('round_id')->references('id')->on('round_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches_models');
    }
}
