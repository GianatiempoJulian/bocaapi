<?php

namespace App\Http\Requests\PlayerXGame;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlayerXGameRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'game_id' => 'integer',
            'player_id' => 'integer',
            'playerGoals' => 'integer',
            'playerAssists' => 'integer',
            'playerCleansheets' => 'integer',
            'playerRedcards' => 'integer'
        ];
    }
}
