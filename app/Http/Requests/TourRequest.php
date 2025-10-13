<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'description' => 'required|string',
            'type_activity' => 'required|string|max:100',
            'duration' => 'required|string|max:150',
            'location' => 'required|string|max:100',
            'type_transport' => 'required|string|max:125',
            'tour_language' => 'required|string|max:100',
            'max_capacity' => 'required|string|max:45',
            'reservation_id' => 'required',
            'guide_id' => 'required',
            'tour_categorie_id' => 'required',
            'admin_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la actividad es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.min' => 'El nombre debe tener al menos 8 caracteres.',
            'name.max' => 'El nombre no puede superar los 255 caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser un texto válido.',


            'type_activity.required' => 'El tipo de actividad es obligatorio.',
            'type_activity.string' => 'El tipo de actividad debe ser un texto válido.',
            'type_activity.max' => 'El tipo de actividad no puede superar los 100 caracteres.',

            'duration.required' => 'La duración es obligatoria.',
            'duration.string' => 'La duración debe ser un texto válido.',
            'duration.max' => 'La duración no puede superar los 150 caracteres.',

            'location.required' => 'La ubicación es obligatoria.',
            'location.string' => 'La ubicación debe ser un texto válido.',
            'location.max' => 'La ubicación no puede superar los 100 caracteres.',

            'type_transport.required' => 'El tipo de transporte es obligatorio.',
            'type_transport.string' => 'El tipo de transporte debe ser un texto válido.',
            'type_transport.max' => 'El tipo de transporte no puede superar los 125 caracteres.',

            'tour_language.required' => 'El idioma del tour es obligatorio.',
            'tour_language.string' => 'El idioma del tour debe ser un texto válido.',
            'tour_language.max' => 'El idioma del tour no puede superar los 100 caracteres.',

            'max_capacity.required' => 'La capacidad máxima es obligatoria.',
            'max_capacity.string' => 'La capacidad máxima debe ser un texto válido.',
            'max_capacity.max' => 'La capacidad máxima no puede superar los 45 caracteres.',

            'reservation_id.required' => 'La reserva asociada es obligatoria.',

            'guide_id.required' => 'El guía es obligatorio.',

            'tour_categorie_id.required' => 'La categoría es obligatoria.',

            'admin_id.required' => 'El administrador es obligatorio.',
        ];
    }
}
