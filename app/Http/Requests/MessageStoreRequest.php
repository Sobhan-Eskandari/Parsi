<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageStoreRequest extends FormRequest
{

    protected $redirect = '/#contactDown';

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
            'email' => 'email|required',
            'message' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'وارد کردن نام اجباری است',
            'email.required' => 'وارد کردن ایمیل اجباری است',
            'email.email' => 'ایمیل وارد شده معتبر نیست',
            'message.required' => 'وارد کردن پیام اجباری است',
            'message.min' => 'پیام باید حداقل 5 حرف باشد',
        ];
    }
}
