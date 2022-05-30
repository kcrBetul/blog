<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=> 'required|min:2|max:200',
            'surname' => 'required|min:2|max:200',
            'email' => 'required|min:2|max:200',
            'phone' => 'required|min:10|max:11',
            'type' => 'required|min:2|max:200',
            'password' => 'required|min:3|max:4',
            'level' => 'required|min:1|max:100',
            'profile' => 'min:2|max:100',
        ];
    }
}
