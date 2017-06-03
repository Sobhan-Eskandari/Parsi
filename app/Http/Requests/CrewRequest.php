<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrewRequest extends FormRequest
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
            'image' => 'image',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'فایل وارد شده تصویر نمی باشد',
            'name.required' => 'وارد کردن نام کادر اجرایی اجباری می باشد',
        ];
    }
}
