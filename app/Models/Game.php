<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['date','goals','rivalGoals','result','isLocal','instance','competition_id','team_id','stadia_id'];


    public function competition(): BelongsTo
    {
        return $this->belongsTo(Competition::class, 'competition_id');
    }

    public function rival(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function stadium(): BelongsTo
    {
        return $this->belongsTo(Stadium::class, 'stadia_id');
    }
}
