<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaStoreRequest extends FormRequest
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
            'portada' => '',
            'titulo' => 'required|max:75',
            'genero_id' => 'required|exists:generos,id',
            'fecha_lanzamiento' => 'required|date|before:today',
            'duracion' => 'required|numeric|min:1',
            'director' => 'nullable|max:75',
            'sinopsis' => 'nullable|string|max:400',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'titulo.max' => 'El título no debe superar los 75 caracteres.',
            'fecha_lanzamiento.required' => 'La fecha de lanzamiento es obligatoria.',
            'fecha_lanzamiento.date' => 'La fecha de lanzamiento debe ser una fecha válida.',
            'fecha_lanzamiento.before' => 'La fecha de lanzamiento debe ser anterior a hoy.',
            'duracion.required' => 'La duración es obligatoria.',
            'duracion.numeric' => 'La duración debe ser un número.',
            'duracion.min' => 'La duración debe ser al menos 1 minuto.',
            'director.max' => 'El nombre del director no debe superar los 75 caracteres.',
            'sinopsis.string' => 'La sinopsis debe ser un texto válido.',
            'sinopsis.max' => 'La sinopsis no debe superar los 400 caracteres.',
        ];
    }


    public function attributes()
    {
        return [
            'portada' => 'Portada',
            'titulo' => 'Titulo',
            'genero_id' => 'Genero_id',
            'fecha_lanzamiento' => 'Fecha lanzamiento',
            'duracion' => 'Duración',
            'director' => 'Director',
            'sinopsis' => 'Sinopsis',
        ];
    }

}
