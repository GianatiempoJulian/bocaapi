<?php

namespace App\Http\Requests\PlayerXGame;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayerXGameRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'game_id' => 'required|integer',
            'player_id' => 'required|integer',
            'playerGoals' => 'integer',
            'playerAssists' => 'integer',
            'playerCleansheets' => 'integer',
            'playerRedcards' => 'integer'
        ];
    }
}
