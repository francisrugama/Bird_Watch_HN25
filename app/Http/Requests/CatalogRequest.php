<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.max'      => 'El título no puede tener más de 255 caracteres.',
            'image.image'    => 'El archivo debe ser una imagen.',
            'image.mimes'    => 'La imagen debe ser jpg, jpeg, png, gif o webp.',
            'image.max'      => 'La imagen no puede superar los 2 MB.',
        ];
    }
}
