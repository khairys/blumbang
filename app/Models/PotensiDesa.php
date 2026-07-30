<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PotensiDesa extends Model
{
    use SoftDeletes;
    protected $table = 'potensi_desa';
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriPotensi::class, 'kategori_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
