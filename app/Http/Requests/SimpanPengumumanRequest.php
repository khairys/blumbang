<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanPengumumanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'           => 'required|string|max:255',
            'content'         => 'required|string',
            'status'          => 'required|in:draft,published',
            'published_at'    => 'nullable|date',
            'expired_at'      => 'nullable|date|after_or_equal:published_at',
            'event_date'      => 'nullable|date',
            'event_time'      => 'nullable|string|max:100',
            'location'        => 'nullable|string|max:255',
            'contact'         => 'nullable|string|max:255',
            'activity_status' => 'required|in:aktif,mendatang,selesai',
            'attachment'      => 'nullable|file|max:5120|mimes:pdf,jpg,jpeg,png,webp',
            'is_popup'        => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'expired_at.after_or_equal' => 'Tanggal berlaku hingga harus setelah tanggal publikasi.',
        ];
    }
}
