<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'site_name_ar' => 'required',
            'site_name_en' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'logo' => 'sometimes|nullable|image|mimes:png,jpg,jpeg,gif',
            'icon' => 'sometimes|nullable|image|mimes:png,jpg,jpeg,gif',
            'cover' => 'sometimes|nullable|image|mimes:png,jpg,jpeg,gif',
            'main_lang' => 'required|in:arabic,english',
            'status' => 'required|in:open,close',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
