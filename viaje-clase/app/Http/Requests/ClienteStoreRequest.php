<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nif'=>'required|unique:clientes|min=8|max=12',
            'apellido1'=>'required|max:20',
            'fecha_nacimiento'=>'nullable|date|before:today',
        ];
    }
    public function attributes()
    {
        return [
            'apellido1'=>'Primer apellido',
        ]
    }
}
