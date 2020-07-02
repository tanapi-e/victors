<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'name' => 'required|max:20',
            'age' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください。',
            'name.max' => '20文字以下で入力して下さい。',
            'age.required'  => '年齢を入力して下さい。',
            'age.integer' => '数字で入力して下さい。'
        ];
    }
}
