<?php

namespace App\Http\Requests\Stadium;

use Illuminate\Foundation\Http\FormRequest;

class StoreStadiumRequest extends FormRequest
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
