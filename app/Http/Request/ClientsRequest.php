<?php

namespace App\Http\Requests;


class ClientsRequest extends Request
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
            'contact_first_name'   => 'required',
        ];
    }

    /**
     * Set custom messages for validator errors
     * @return array
     */
    public function messages()
    {
        return [
            'contact_first_name.required' => 'Debe añadir una descripcion',
        ];
    }
}