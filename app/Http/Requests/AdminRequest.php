<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => ['required', 'max:255', Rule::unique('admins')->ignore($this->admin)],
            'telephone' => ['nullable', 'string', 'max:15', Rule::unique('admins')->ignore($this->admin)],
            'age' => 'required|int',
            'country' => 'required|string|max:39',
            'gender' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena.',
            'name.min' => 'El nombre debe tener al menos 8 caracteres.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.max' => 'El correo electrónico no puede tener más de 255 caracteres.',
            'email.unique' => 'El correo electrónico ya se ha tomado.',

            'phone.required' => 'El número teléfonico es obligatorio.',
            'phone.max' => 'El número teléfonico no puede tener más de 15 caracteres.',
            'phone.unique' => 'El número teléfonico ya se ha tomado.',

            'age.required' => 'El edad es obligatorio.',
            'age.int' => 'La edad debe ser un número entero.',

            'country.required' => 'El campo de país es obligatorio.',
            'country.string' => 'El país debe ser una cadena.',
            'country.max' => 'El país no puede tener más de 39 caracteres.',
        ];
    }
}
