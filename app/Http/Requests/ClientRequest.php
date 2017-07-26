<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:50',
            'email' => 'email',
            'phone' => 'required|min:10|max:10',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [

        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.min' => 'atleast 5 chars.',
            'name.max' => 'what the hell ? more than 50 chars ? I refuse to accept it.',
            'phone.min' => 'Requires exactly 10 digits',
            'phone.max' => 'Requires only 10 digits',
            'email.email' => 'I get it, you are lazy. But this is not acceptable. This will lead to over problems.',
        ];
    }
}
