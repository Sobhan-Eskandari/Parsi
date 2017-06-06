<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'about_us' => 'required',
            'about_us_photo' => 'image',
            'about_conference' => 'required',
            'about_event' => 'required',
            'address' => 'required',
            'land_line' => 'required|digits:11',
            'mobile' => 'required|digits:11',
            'email' => 'required|email',
            'site_title' => 'required',
            'meta_description' => 'required',
            'latitude' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'about_us.required' => 'وارد کردن درباره ما اجباری است',
            'about_us_photo.image' => 'فایل وارد شده برای درباره ما تصویر نمی باشد',
            'about_conference.required' => 'وارد کردن درباره همایش اجباری است',
            'about_event.required' => 'وارد کردن درباره رویداد اجباری است',
            'address.required' => 'وارد کردن آدرس اجباری است',
            'land_line.required' => 'وارد کردن شماره تلفن اجباری است',
            'land_line.digits' => 'شماره تفلن باید 11 رقم باشد',
            'mobile.required' => 'وارد کردن موبایل اجباری است',
            'mobile.digits' => 'موبایل باید 11 رقم باشد',
            'email.required' => 'وارد کردن ایمیل اجباری است',
            'email.email' => 'ایمیل وارد شده معتبر نمی باشد',
            'site_title.required' => 'وارد کردن عنوان سایت اجباری می باشد',
            'meta_description.required' => 'وارد کردن متاداده اجباری است',
            'latitude.required' => 'وارد کردن محل همایش روی نقشه اجباری است',
        ];
    }
}
