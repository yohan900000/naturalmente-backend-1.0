<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'title' => ['required'],
            'gamme_id' => ['required'],
            'picture' => ['image', 'mimes:jpeg,png,jpg,webp,svg'],
            'description' => '',
        ];

        if ($this->isMethod('put') && $this->filled('picture')) {
            $rules['picture'][] = 'required';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'gamme_id.required' => 'Le champ gamme est requis.',
            'title.required' => 'Le champ titre est requis.',
            'picture.required' => 'Le champ image est requis.',
            'picture.image' => 'Le fichier doit être une image.',
            'picture.mimes' => 'Le fichier doit avoir une extension parmi :values.',
        ];
    }
}
