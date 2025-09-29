<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:40'],
            'content' => ['required','string','max:200'],
        ];
    }

    public function attributes(): array
    {
        // エラーメッセージの項目名を日本語に
        return [
            'title'   => 'タイトル',
            'content' => '本文',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'   => ':attributeは必須です。',
            'title.max'        => ':attributeは:max文字以内で入力してください。',
            'content.required' => ':attributeは必須です。',
            'content.max'      => ':attributeは:max文字以内で入力してください。',
        ];
    }
    
}
