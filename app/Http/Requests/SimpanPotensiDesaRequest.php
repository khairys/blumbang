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
            'title'       => 'required|string|max:255',
            'summary'     => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'thumbnail'   => 'nullable|image|max:2048',
            'status'      => 'required|in:draft,published',
            'kategori_id' => 'nullable|exists:kategori_potensi,id',
        ];
    }
}
