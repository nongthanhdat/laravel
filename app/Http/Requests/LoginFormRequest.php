<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
//    public function message()
//    {
//        return [
//            'name.required' => 'Name khong duoc de trong',
//            'email.required' => 'Email khong duoc de trong',
//            'email.unique' => 'Email nay da duoc dang ky',
//            'password.required' => 'Password khong duoc de trong',
//            'password.confirmed' => 'Password khong trung nhau',
//            'password.min' => 'Toi thieu 8 ky tu',
//        ];
//    }
}
