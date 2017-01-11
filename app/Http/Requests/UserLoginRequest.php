<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Response;
use Illuminate\Support\Facades\Redirect;

class UserLoginRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages() {
        return [
        ];
    }

    public function response(array $errors) {

        return Redirect::back()->withErrors($errors);
    }

}
