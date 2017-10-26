<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required',
            'email' => 'email | required',
            'role_id' => 'required',
            'is_active' => 'required',
            'password' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'role_id.required' => 'A role must be selected',
            'is_active.required'  => 'A status must be selected',
        ];
    }
}
