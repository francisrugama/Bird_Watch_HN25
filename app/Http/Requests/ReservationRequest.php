<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'status' => 'required|string|max:255',
            'people' => 'required|string|max:45',
            'people_count'=> 'required|string|max:3',
            'reservation_date' => 'required|date',
            'other_service' => 'required|string|max:200',
            'price_person' => 'required|decimal:0,82',
            'total' => 'required|decimal:0,82',
            'visitor_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'status.required' => 'El estado es obligatorio.',
            'status.string' => 'El estado debe ser un texto válido.',
            'status.max' => 'El estado no puede superar los 255 caracteres.',

            'people.required' => 'El número de personas es obligatorio.',
            'people.string' => 'El campo personas debe ser un texto válido.',
            'people.max' => 'El campo personas no puede superar los 45 caracteres.',

            'people_count.required'=> 'La cantidad de personas es requerida',
            'People_count.string'=> 'La Cantidad de personas debe de llevar solo caracteres',
            'People_count.max'=> 'La Cantidad de personas no puede exceder el maximo de 3 caracteres',

            'reservation_date.required' => 'La fecha de la reservación es obligatoria.',
            'reservation_date.date' => 'La fecha de la reservación debe tener un formato válido.',

            'other_service.required' => 'El campo otros servicios es obligatorio.',
            'other_service.string' => 'El campo otros servicios debe ser un texto válido.',
            'other_service.max' => 'El campo otros servicios no puede superar los 200 caracteres.',

            'price_per_person.required' => 'El precio por persona es obligatorio.',
            'price_per_person.decimal' => 'El precio por persona debe tener máximo 2 decimales.',

            'total.required' => 'El total es obligatorio.',
            'total.decimal' => 'El total debe ser un número válido con máximo 2 decimales.',

            'visitor_id.required' => 'El visitante es obligatorio.',
        ];
    }
}
