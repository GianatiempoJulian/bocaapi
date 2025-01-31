<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['name','lastname','image','position','goals','assists','cleansheets','redcards','trophies','matches','wins','draws','loses'];
}
