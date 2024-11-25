<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeseadosStoreRequest extends FormRequest
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
            'pelicula_id' => 'required|exists:peliculas,id',
        ];
    }

    //public function messages(): array
    //{
    //    return [
    //        'nif.requires' => 'El nif es obligatorio',
    //        'apellido1.*' => 'El Apellido 1ª no es correcto',
    //    ];
    //}

    public function attributes()
    {
        return [
            'pelicula_id' => 'pelicula_id',
        ];
    }

}
