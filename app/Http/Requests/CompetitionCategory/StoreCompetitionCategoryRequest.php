<?php

namespace App\Http\Requests\CompetitionCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionCategoryRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'required|string',
        ];
    }
}
