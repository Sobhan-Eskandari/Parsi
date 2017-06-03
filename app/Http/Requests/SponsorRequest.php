<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorRequest extends FormRequest
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
            'logo' => 'image',
            'link' => 'url',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'logo.image' => 'فایل وارد شده برای لوگو تصویر نمی باشد',
            'name.required' => 'وارد کردن نام حامی اجباری می باشد',
            'link.url' => 'آدرس وارد شده معتبر نیست',
        ];
    }
}
