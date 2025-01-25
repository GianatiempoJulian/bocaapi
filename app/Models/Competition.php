<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Competition extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','season_id','competition_category_id'];

    public function competitionCategory(): BelongsTo
    {
        return $this->belongsTo(CompetitionCategory::class, 'competition_category_id');
    }

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class, 'season_id');
    }
}
