<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'date' => 'required|date',
            'goals' => 'required|integer|min:0',
            'rivalGoals' => 'required|integer|min:0',
            'result' => 'required|string|max:1', 
            'isLocal' => 'required|boolean',
            'instance' => 'required|string',
            'competition_id' => 'required|exists:competitions,id',
            'team_id' => 'required|exists:teams,id',
            'stadia_id' => 'required|exists:stadia,id',
        ];
    }
}
