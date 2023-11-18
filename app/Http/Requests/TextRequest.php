<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextRequest extends FormRequest
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
            'gamme_id' => ['required'],
            'description' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'gamme_id.required' => 'Le champ de catégorie est requis.',
            'description.required' => 'Le champ de description est requis.'
        ];
    }
}
