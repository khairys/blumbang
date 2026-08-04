<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanProfilDesaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'history'             => 'nullable|string',
            'vision'              => 'nullable|string',
            'mission'             => 'nullable|string',
            'geography'           => 'nullable|string',
            'general_information' => 'nullable|string',
            'organizational_structure' => 'nullable|image|max:5120',
            'stat_penduduk'       => 'nullable|string|max:50',
            'stat_kk'             => 'nullable|string|max:50',
            'stat_rt'             => 'nullable|string|max:50',
            'stat_rw'             => 'nullable|string|max:50',
            'stat_luas_wilayah'   => 'nullable|string|max:50',
        ];
    }
}
