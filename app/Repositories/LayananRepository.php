<?php

namespace App\Repositories;

use App\Models\Layanan;

class LayananRepository
{
    public function getAll()
    {
        return Layanan::latest()->paginate(10);
    }

    public function find($id)
    {
        return Layanan::findOrFail($id);
    }

    public function create(array $data)
    {
        return Layanan::create($data);
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
