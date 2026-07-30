<?php

namespace App\Repositories;

use App\Models\Pengumuman;

class PengumumanRepository
{
    public function getAll()
    {
        return Pengumuman::latest()->paginate(10);
    }

    public function find($id)
    {
        return Pengumuman::findOrFail($id);
    }

    public function create(array $data)
    {
        return Pengumuman::create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->find($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }
}
