<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPotensi extends Model
{
    protected $table = 'kategori_potensi';
    protected $guarded = ['id'];

    public function potensi_desa()
    {
        return $this->hasMany(PotensiDesa::class, 'kategori_id');
    }
}
