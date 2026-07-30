<?php

namespace App\Repositories;

use App\Models\Berita;

class BeritaRepository
{
    public function getAll()
    {
        return Berita::latest()->paginate(10);
    }

    public function find($id)
    {
        return Berita::findOrFail($id);
    }

    public function create(array $data)
    {
        return Berita::create($data);
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
