<?php

namespace App\Http\Requests\Season;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeasonRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'year' => 'required|integer',
        ];
    }
}
