<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
            'address' => 'required|string|min:8|max:255',
            'availability_schedule' => 'required|string|max:200',
            'type_reserve' => 'required|string|max:200',
            'description' => 'required|string',
            'tour_id' => 'required',
            'hotel_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.min' => 'El nombre debe tener al menos 8 caracteres.',
            'name.max' => 'El nombre no puede superar los 255 caracteres.',

            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser un texto válido.',
            'address.min' => 'La dirección debe tener al menos 8 caracteres.',
            'address.max' => 'La dirección no puede superar los 255 caracteres.',

            'availability_schedule.required' => 'El horario de disponibilidad es obligatorio.',
            'availability_schedule.string' => 'El horario de disponibilidad debe ser un texto válido.',
            'availability_schedule.max' => 'El horario de disponibilidad no puede superar los 200 caracteres.',

            'type_reserve.required' => 'El tipo de reserva es obligatorio.',
            'type_reserve.string' => 'El tipo de reserva debe ser un texto válido.',
            'type_reserve.max' => 'El tipo de reserva no puede superar los 200 caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser un texto válido.',

            'tour_id.required' => 'Debe seleccionar un tour válido.',

            'hotel_id.required' => 'Debe seleccionar un hotel válido.',
        ];
    }
}
