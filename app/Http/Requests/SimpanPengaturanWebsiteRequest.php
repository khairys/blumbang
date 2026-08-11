<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanPengaturanWebsiteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'village_name' => 'required|string|max:255',
            'website_description' => 'nullable|string|max:255',
            'email'        => 'nullable|email|max:255',
            'phone'        => 'nullable|string|max:50',
            'address'      => 'nullable|string',
            'facebook'     => 'nullable|string|max:255',
            'instagram'    => 'nullable|string|max:255',
            'youtube'      => 'nullable|url|max:255',
            'maps_embed'   => 'nullable|string',
            'operating_hours' => 'nullable|array',
            'logo'         => 'nullable|image|max:2048',
            'favicon'      => 'nullable|image|max:512',
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->facebook && !str_starts_with($this->facebook, 'http')) {
            $this->merge(['facebook' => 'https://facebook.com/' . $this->facebook]);
        }
        if ($this->instagram && !str_starts_with($this->instagram, 'http')) {
            $this->merge(['instagram' => 'https://instagram.com/' . $this->instagram]);
        }
    }
}
