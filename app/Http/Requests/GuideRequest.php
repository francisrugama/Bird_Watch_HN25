<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GuideRequest extends FormRequest
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
            'email' => ['required', 'max:255', Rule::unique('guides')->ignore($this->guide)],
            'telephone' => ['nullable', 'string', 'max:15', Rule::unique('guides')->ignore($this->guide)],
            'experience' => 'required|string|max:255',
            'language' => 'required|string|max:55',
            'age' => 'equired|int',
            'gender' => 'required',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena.',
            'name.min' => 'El nombre debe tener al menos 8 caracteres.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.max' => 'El correo electrónico no puede tener más de 255 caracteres.',
            'email.unique' => 'El correo electrónico ya se ha tomado.',

            'telephone.required' => 'El número teléfonico es obligatorio.',
            'telephone.max' => 'El número teléfonico no puede tener más de 15 caracteres.',
            'phone.unique' => 'El número teléfonico ya se ha tomado.',

            'experience.required' => 'La experiencia es obligatoria.',
            'experience.string'   => 'La experiencia debe ser un texto válido.',
            'experience.max'      => 'La experiencia no puede superar los 255 caracteres.',

            'language.required' => 'El idioma es obligatorio.',
            'language.string'   => 'El idioma debe ser un texto válido.',
            'language.max'      => 'El idioma no puede superar los 55 caracteres.',

            'age.required' => 'La edad es obligatoria.',
            'age.integer'  => 'La edad debe ser un número entero válido.',

            'gender.required' => 'El género es obligatorio.',
        ];
    }
}
