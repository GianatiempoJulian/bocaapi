<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetitionCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function competitions(): HasMany
    {
        return $this->hasMany(Competition::class);
    }
}
