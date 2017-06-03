<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LecturerRequest extends FormRequest
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
            'profession' => 'required',
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'وارد کردن نام سخنران اجباری است',
            'profession.required' => 'وارد کردن حرفه سخنران اجباری است',
            'image.image' => 'فایل فرستاده شده تصویر نمی باشد',
        ];
    }
}
