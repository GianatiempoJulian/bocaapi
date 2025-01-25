<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserXGame extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','game_id'];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function game(): HasOne
    {
        return $this->hasOne(Game::class);
    }
}
