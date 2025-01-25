<?php

namespace App\Http\Requests\Competition;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompetitionRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'string',
            'image' => 'string',
            'season_id' => 'integer',
            'competition_category_id' => 'integer'
        ];
    }
}
