<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopicCreateRequest extends FormRequest
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
            'title' => 'required|min:2|max:200',
            'user_id' => 'required|min:1|max:4',
            'ticket_id' => 'required|min:1|max:4',
            'contents' => 'required|min:2|max:200',
        ];
    }
}
