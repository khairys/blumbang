<?php

namespace App\Repositories;

use App\Models\PotensiDesa;

class PotensiDesaRepository
{
    public function getAll()
    {
        return PotensiDesa::latest()->paginate(10);
    }

    public function find($id)
    {
        return PotensiDesa::findOrFail($id);
    }

    public function create(array $data)
    {
        return PotensiDesa::create($data);
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
