<?php

namespace App\Http\Requests\Competition;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'image' => 'string',
            'season_id' => 'required|integer',
            'competition_category_id' => 'required|integer'
        ];
    }
}
