<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPermissionCreate extends FormRequest
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
            'name' => 'required|unique:permissions',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'عنوان دسترسی را وارد کنید',
            'name.unique' => 'این دسترسی قبلا ثبت شده است',
        ];
    }
}
