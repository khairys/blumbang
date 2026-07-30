<?php

namespace App\Repositories;

use App\Models\ProfilDesa;

class ProfilDesaRepository
{
    public function getAll()
    {
        return ProfilDesa::latest()->paginate(10);
    }

    public function find($id)
    {
        return ProfilDesa::findOrFail($id);
    }

    public function create(array $data)
    {
        return ProfilDesa::create($data);
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
