<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanPotensiDesaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'kategori_id' => 'nullable|exists:kategori_potensi,id',
            'summary' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'thumbnail' => 'nullable|image|max:2048',
        ];
    }
}
