<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'descripcion' => 'nullable|string|max:250'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor de este campo no es correcto',
            'name.max' => 'Solo se permiten 50 caracteres',
            'descripcion.string' => 'El valor de este campo no es correcto',
            'descripcion.max' => 'Solo se permiten 250 caracteres',
        ];
    }
}
