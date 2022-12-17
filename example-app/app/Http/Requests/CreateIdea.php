<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateIdea extends FormRequest
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
            'idea_name' => ['required'],
            'idea_url' => ['required', 'max:200'],
            'category' => ['required', 'max:200'],
            'file_type' => ['required', 'max:200'],
            'explain' => ['required', 'max:200'],
            'idea_picture_1' => ['required','mimes:jpg,jpeg,gif,png'],
            'idea_picture_2' => ['mimes:jpg,jpeg,gif,png'],
            'idea_picture_3' => ['mimes:jpg,jpeg,gif,png'],
        ];
    }
}
