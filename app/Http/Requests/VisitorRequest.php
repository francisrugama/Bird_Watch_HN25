<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VisitorRequest extends FormRequest
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
            'name' => 'required|string|min:8|max:255',
            'email' => ['required', 'max:255', Rule::unique('visitors')->ignore($this->visitor)],
            'telephone' => ['nullable', 'string', 'max:15', Rule::unique('visitors')->ignore($this->visitor)],
            'age' => 'required|int',
            'language' => 'required|string|max:55',
            'country' => 'required|string|max:39',
            'gender' => 'required',
            'identification_type' => 'required|string|max:20',
            'identification_number' => ['nullable', 'string', 'max:20' , Rule::unique('visitors')->ignore($this->visitor)],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.min' => 'El nombre debe tener al menos 8 caracteres.',
            'name.max' => 'El nombre no puede superar los 255 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.max' => 'El correo electrónico no puede superar los 255 caracteres.',
            'email.unique' => 'El correo electrónico es unico.',

            'Phone.string' => 'El teléfono debe ser un texto válido.',
            'Phone.max' => 'El teléfono no puede superar los 15 caracteres.',
            'Phone.unique' => 'El teléfono ya está registrado.',

            'age.required' => 'La edad es obligatoria.',
            'age.int' => 'La edad debe ser un número entero.',

            'language.required' => 'El idioma es obligatorio.',
            'language.string' => 'El idioma debe ser un texto válido.',
            'language.max' => 'El idioma no puede superar los 55 caracteres.',

            'country.required' => 'El país es obligatorio.',
            'country.string' => 'El país debe ser un texto válido.',
            'country.max' => 'El país no puede superar los 39 caracteres.',

            'gender.required' => 'El género es obligatorio.',

            'Identification_type.required' => 'El tipo de identificación es requerido.',
            'identification_type.string' => 'El tipo de identificación debe ser un texto válido.',
            'Identification_type.max' => 'El tipo de identificación no puede superar los 20 caracteres.',

            'Identification_number.unique' => 'El número de identificación ya está registrado.',
            'identification_number.string' => 'El número de identificación debe ser un texto válido.',
            'Identification_number.max' => 'El número de identificación no puede superar los 20 caracteres.',
        ];
    }
}
