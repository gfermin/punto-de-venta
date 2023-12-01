<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:providers,'.$this->route('provider')->id.'|max:200',
            'address' => 'required|string|max:250',
            'rnc' => 'required|string|max:11|unique:providers,'.$this->route('provider')->id.'|min:11',
            'phone_number' => 'required|string|unique:providers,'.$this->route('provider')->id.'|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor de este campo no es correcto',
            'name.max' => 'Solo se permiten 255 caracteres',

            'email.required' => 'Este campo es requerido',
            'email.string' => 'El valor de este campo no es correcto',
            'email.max' => 'Solo se permiten 250 caracteres',
            'email.unique' => 'Este email ya se encuentra registrado',

            'address.required' => 'Este campo es requerido',
            'address.string' => 'El valor de este campo no es correcto',
            'address.max' => 'Solo se permiten 250 caracteres',

            'rnc.required' => 'Este campo es requerido',
            'rnc.string' => 'El valor de este campo no es correcto',
            'rnc.max' => 'Solo se permiten 11 caracteres',
            'rnc.min' => 'No se permiten menos de 11 caracteres',
            'rnc.unique' => 'Este rnc ya se encuentra registrado',
            
            'phone_number.required' => 'Este campo es requerido',
            'phone_number.string' => 'El valor de este campo no es correcto',
            'phone_number.max' => 'Solo se permiten 100 caracteres',
            'phone_number.unique' => 'Este telefono ya se encuentra registrado',
        ];
    }
}
