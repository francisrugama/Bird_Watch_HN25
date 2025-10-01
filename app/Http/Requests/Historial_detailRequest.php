<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Historial_detailRequest extends FormRequest
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
            'status' => 'required|string|max:55',
            'people' => 'required|string|max:45',
            'type_service' => 'required|string|max:100',
            'total' => 'required|decimal:0,6',
            'reservation_id' => 'required',
            'visitor_id' => 'required',
            'tour_id' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.min' => 'El nombre debe tener al menos 8 caracteres.',
            'name.max' => 'El nombre no puede superar los 255 caracteres.',

            'status.required' => 'El estado es obligatorio.',
            'status.string' => 'El estado debe ser un texto válido.',
            'status.max' => 'El estado no puede superar los 55 caracteres.',

            'people.required' => 'El número de personas es obligatorio.',
            'people.string' => 'El campo personas debe ser un texto válido.',
            'people.max' => 'El campo personas no puede superar los 45 caracteres.',

            'type_service.required' => 'El tipo de servicio es obligatorio.',
            'type_service.string' => 'El tipo de servicio debe ser un texto válido.',
            'type_service.max' => 'El tipo de servicio no puede superar los 100 caracteres.',

            'total.required' => 'El total es obligatorio.',
            'total.decimal' => 'El total debe ser un número válido con máximo 2 decimales.',

            'reservation_id.required' => 'La reserva es obligatoria.',

            'visitor_id.required' => 'El visitante es obligatorio.',

            'tour_id.required' => 'El tour es obligatorio.',
        ];
    }
}
