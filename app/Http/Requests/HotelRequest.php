<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HotelRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'descriptions' => 'required|string',
            'type_habitation' => 'required|string|max:255',
            'address' => 'required|string|min:8|max:255',
            'status' => 'required|string|max:255',
            'price_night' => 'required|decimal:0,2',
            'telephone' => ['nullable', 'string', 'max:15', Rule::unique('hotels')->ignore($this->hotel)],
            'responsible' => 'required|string|max:255',
            'qualification' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre del hotel es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.max' => 'El nombre no puede superar los 255 caracteres.',

            'descriptions.required' => 'La descripción es obligatoria.',
            'descriptions.string' => 'La descripción debe ser un texto válido.',

            'type_habitation.required' => 'El tipo de habitación es obligatorio.',
            'type_habitation.string' => 'El tipo de habitación debe ser un texto válido.',
            'type_habitation.max' => 'El tipo de habitación no puede superar los 255 caracteres.',

            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser un texto válido.',
            'address.min' => 'La dirección debe tener al menos 8 caracteres.',
            'address.max' => 'La dirección no puede superar los 255 caracteres.',

            'status.required' => 'El estado es obligatorio.',
            'status.string' => 'El estado debe ser un texto válido.',
            'status.max' => 'El estado no puede superar los 12 caracteres.',

            'price_night.required' => 'El precio por noche es obligatorio.',
            'price_night.decimal' => 'El precio por noche debe tener máximo 2 decimales.',

            'telephone.string' => 'El teléfono debe ser un texto válido.',
            'telephone.max' => 'El teléfono no puede superar los 15 caracteres.',
            'telephone.unique' => 'El teléfono ya está registrado para otro hotel.',

            'responsible.required' => 'El responsable es obligatorio.',
            'responsible.string' => 'El responsable debe ser un texto válido.',
            'responsible.max' => 'El responsable no puede superar los 255 caracteres.',

            'qualification.required' => 'La calificación es obligatoria.',
            'qualification.string' => 'La calificación debe ser un texto válido.',
        ];
    }

}
