<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'body' => 'required|min:5',
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'وارد کردن موضوع اجباری است',
            'body.required' => 'وارد کردن متن اجباری است',
            'body.min' => 'متن باید حداقل 5 حرف باشد',
            'image.image' => 'فایل فرستاده شده تصویر نمی باشد',
        ];
    }
}
