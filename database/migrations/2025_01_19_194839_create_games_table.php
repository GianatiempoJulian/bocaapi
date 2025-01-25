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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->integer("goals");
            $table->integer("rivalGoals");
            $table->char("result");
            $table->boolean("isLocal");
            $table->string("instance");
            $table->foreignId('competition_id')->constrained('competitions');
            $table->foreignId('team_id')->constrained('teams');
            $table->foreignId('stadia_id')->constrained('stadia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
