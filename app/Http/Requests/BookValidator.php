<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'barcode' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'edition' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'publishing_house' => 'nullable|string|max:255',
            'comment' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'origin' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            //
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'barcode.required' => 'El código de barras es obligatorio.',
            'barcode.max' => 'El código de barras no debe tener más de :max caracteres.',
            'title.required' => 'El título es obligatorio.',
            'title.max' => 'El título no debe tener más de :max caracteres.',
            'author.required' => 'El autor es obligatorio.',
            'author.max' => 'El autor no debe tener más de :max caracteres.',
            'edition.max' => 'La edición no debe tener más de :max caracteres.',
            'area.max' => 'El área no debe tener más de :max caracteres.',
            'publishing_house.max' => 'La editorial no debe tener más de :max caracteres.',
            'comment.max' => 'El comentario no debe tener más de :max caracteres.',
            'quantity.required' => 'La cantidad es obligatoria.',
            'quantity.integer' => 'La cantidad debe ser un número entero.',
            'quantity.min' => 'La cantidad debe ser al menos :min.',
            'photo.image' => 'El archivo adjunto debe ser una imagen.',
            'photo.mimes' => 'El archivo adjunto debe ser una imagen de tipo: :values.',
            'photo.max' => 'El archivo adjunto no debe ser mayor de :max KB.',
        ];
    }
}
