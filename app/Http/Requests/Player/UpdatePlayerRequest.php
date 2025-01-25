<?php

namespace App\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlayerRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'string',
            'lastname' => 'string',
            'image' => 'string',
            'position' => 'string',
            'goals' => 'integer',
            'assists' => 'integer',
            'cleansheets' => 'integer',
            'redcards' => 'integer',
            'trophies' => 'integer',
            'matches' => 'integer',
            'wins' => 'integer',
            'draws' => 'integer',
            'loses' => 'integer'
        ];
    }
}
