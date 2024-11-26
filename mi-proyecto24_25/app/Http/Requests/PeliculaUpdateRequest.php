<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaUpdateRequest extends FormRequest
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
            'portada' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required|unique|max:75',
            'genero' => 'required',
            'fecha_lanzamiento' => 'required|date|before:today',
            'duracion' => 'required|numeric|min:1',
            'director' => 'nullable|max:75',
            'sinopsis' => 'nullable|string|max:400',
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
            'portada' => 'Portada',
            'titulo' => 'Titulo',
            'genero' => 'Genero',
            'fecha_lanzamiento' => 'Fecha lanzamiento',
            'duracion' => 'Duración',
            'director' => 'Director',
            'sinopsis' => 'Sinopsis',
        ];
    }

}
