<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email',
            'old_password' => 'required',
            'password' => 'confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'وارد کردن نام اجباری است',
            'email.required' => 'وارد کردن ایمیل اجباری است',
            'email.email' => 'ایمیل وارد شده معتبر نمی باشد',
//            'password.required' => 'وارد کردن رمز عبور جدید اجباری است',
            'old_password.required' => 'برای ویرایش اطلاعات باید رمز عبور فعلی خود را وارد کنید',
//            'password.min' => 'رمز عبور باید حداقل 6 رقم باشد',
            'password.confirmed' => 'تایید رمز عبور با رمز عبور وارده شده مطابقت ندارد',
        ];
    }
}
