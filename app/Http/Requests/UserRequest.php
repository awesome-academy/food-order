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
            'name' => 'required|min:3|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('setting.name_required'),
            'name.min' => trans('setting.name_length'),
            'name.max' => trans('setting.name_length'),
        ];
    }
}
