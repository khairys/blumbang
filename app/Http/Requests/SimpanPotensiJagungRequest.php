<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanPotensiJagungRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'     => 'required|string|max:255',
            'summary'   => 'nullable|string|max:500',
            'content'   => 'nullable|string',
            'thumbnail' => 'nullable|image|max:2048',
            'status'    => 'required|in:draft,published',
            'category'  => 'required|string|max:100',
        ];
    }
}
