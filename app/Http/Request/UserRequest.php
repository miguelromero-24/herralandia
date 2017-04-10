<?php

namespace App\Http\Requests;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorize to make this request
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to this request
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'   => 'required|min:3|max:100',
            'last_name'    => 'required|min:3|max:100',
            'username'     => 'required|min:3|max:100',
            'email'        => 'required|email',
            'roles'        => 'required',
        ];
    }

    /**
     * Set custom messages for validator errors
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required'      => 'El campo nombre es obligatorio',
            'first_name.min'           => 'La cantidad minima de caracteres es: 3',
            'first_name.max'           => 'La cantidad maxima de caracteres es: 100',
            'last_name.required'       => 'El campo apellido es obligatorio',
            'last_name.min'            => 'La cantidad minima de caracteres es: 3',
            'last_name.max'            => 'La cantidad maxima de caracteres es: 100',
            'email.required'           => 'El correo electronico es obligatorio',
            'email.email'              => 'La direcccion correo electronico no es valida',
            'roles.required'           => 'Debe asignar al menos un rol'
        ];
    }
}