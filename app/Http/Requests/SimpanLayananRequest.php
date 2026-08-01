<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanLayananRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'requirements'  => 'nullable|string',
            'service_flow'  => 'nullable|string',
            'service_hours' => 'nullable|string|max:100',
        ];
    }
}
