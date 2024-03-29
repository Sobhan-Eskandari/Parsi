<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageAnswerRequest extends FormRequest
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
            'subject' => 'required',
            'message' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'وارد کردن موضوع اجباری است',
            'message.required' => 'وارد کردن پیام اجباری است',
            'message.min' => 'پیام باید حداقل 5 حرف باشد',
        ];
    }
}
