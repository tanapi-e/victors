<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesFormRequest extends FormRequest
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
            'opponent_team' => 'required|max:30',
            'match_day' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'opponent_team.required' => 'チーム名を入力してください。',
            'opponent_team.max' => '30文字以下で入力して下さい。',
            'match_day.required'  => '日にちを入力して下さい。'
        ];
    }
}
