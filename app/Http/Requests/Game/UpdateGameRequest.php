<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'date' => 'date',
            'goals' => 'integer',
            'rivalGoals' => 'integer',
            'result' => 'string',
            'isLocal' => 'boolean',
            'istance' => 'string',
            'competition_id' => 'integer',
            'team_id' => 'integer',
            'stadia_id' => 'integer',
        ];
    }
}
