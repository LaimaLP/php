<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:255',
            'type' => 'required|in:UAB, AB, MB, II, Vsi',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Įmonės pavadinimas yra privalomas',
            'name.min' => 'Įmonės pavadinimas turi būti ilgesnis nei 2 simboliai',
            'name.max' => 'Įmonės pavadinimas turi būti trumpesnis nei 100 simboliai',
            'type.required' => 'Įmonės tipas yra privalomas',
            'type.in' => 'Neteisingas įmonės tipas'
        ];
    }
}
