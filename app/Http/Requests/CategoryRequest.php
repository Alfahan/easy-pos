<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255',       // Name harus diisi, berupa teks, maksimal 255 karakter
            'description' => 'nullable|string|max:1000', // Description bersifat opsional, jika ada, harus berupa teks dan maksimal 1000 karakter
        ];
    }
}
