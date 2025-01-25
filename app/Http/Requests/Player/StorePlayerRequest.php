<?php

namespace App\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayerRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'lastname' => 'required|string',
            'image' => 'required|string',
            'position' => 'required|string',
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
