<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesPlayersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches_players_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches_models')->onDelete('cascade');
            $table->unsignedBigInteger('scored_player_id');
            $table->foreign('scored_player_id')->references('id')->on('player_models')->onDelete('cascade');
            $table->unsignedBigInteger('assisted_player_id');
            $table->foreign('assisted_player_id')->references('id')->on('player_models')->onDelete('cascade');
            $table->string('goal_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches_players_models');
    }
}
