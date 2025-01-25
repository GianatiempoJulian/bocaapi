<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerXGame extends Model
{
    use HasFactory;
  
    protected $fillable = ['game_id','player_id','playerGoals','playerAssists','playerCleansheets','playerRedcards'];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
