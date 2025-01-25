<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('player_x_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained('games');
            $table->foreignId('player_id')->constrained('players');
            $table->integer("playerGoals")->nulleable();
            $table->integer("playerAssists")->nulleable();
            $table->integer("playerCleansheets")->nulleable();
            $table->integer("playerRedcards")->nulleable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_x_games');
    }
};
