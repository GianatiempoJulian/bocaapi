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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->string("image");
            $table->string("position");
            $table->integer("goals")->nulleable();
            $table->integer("assists")->nulleable();
            $table->integer("cleansheets")->nulleable();
            $table->integer("redcards")->nulleable();
            $table->integer("trophies")->nulleable();
            $table->integer("matches")->nulleable();
            $table->integer("wins")->nulleable();
            $table->integer("draws")->nulleable();
            $table->integer("loses")->nulleable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
