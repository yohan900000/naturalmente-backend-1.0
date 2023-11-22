<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureRequest extends FormRequest
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
            'picture' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg'],
        ];
    }

    public function messages(): array
    {
        return [
            'gamme_id.required' => 'Le champ gamme est requis.',
            'picture.required' => 'Le champ image est requis.',
            'picture.image' => 'Le fichier doit être une image.',
            'picture.mimes' => 'Le fichier doit avoir une extension parmi :values.',
        ];
    }
}
