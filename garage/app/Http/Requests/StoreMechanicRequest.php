<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMechanicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //useriai viska gali daryti, pakeiciam i true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    { 
        return [   // kad butina/jis stringas/min reiksmes/kiek max
            'name' => 'required|string|min:3|max:64|alpha:ascii',
            'surname'=>'required|string|min:3|max:64|alpha:ascii',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Pamiršote įvesti vardą',
            'name.string' => 'Vardas turi būti tekstinis',
            'name.min' => 'Vardas turi būti bent 3 simboliai',
            'name.max' => 'Vardas turi būti ne daugiau 64 simbolių',
            'name.alpha' => 'Varde negali būti skaičių',
            'surname.required' => 'Pamiršote įvesti pavardę',
            'surname.string' => 'Pavardė turi būti tekstinė',
            'surname.min' => 'Pavardė turi būti bent 3 simboliai',
            'surname.alpha' => 'Varde negali būti skaičių',
            'surname.max' => 'Pavardė turi būti ne daugiau 64 simbolių',

        ];
 
    }
}
