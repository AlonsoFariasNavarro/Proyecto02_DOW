<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user'   => 'bail|required|max:20|min:2|exists:cuentas,user',
            'password' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
        ];
    }

    public function messages():array
    {
        return [
            'nombre.required' => 'Es requerido que los campos contengan datos',
            'nombre.exits'    => 'Usuario ya registrado',
            'nombre.max' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.min' => 'El nombre debe tener entre 2 y 20 caracteres',
            'email.email' => 'Email no válido',
            'email.unique' => 'El email indicado ya está asignado a otro usuario',
            'password.required' => 'Indique contraseña del usuario',
            'password.min' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'password.max' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'password.same' => 'Las contraseñas no coinciden',
            'rol.required' => 'Indique rol del usuario',
            'rol.integer' => 'Rol no válido',
            'rol.gte' => 'Rol no válido',
            'rol.exists' => 'Rol no válido',
        ];
    }
}
