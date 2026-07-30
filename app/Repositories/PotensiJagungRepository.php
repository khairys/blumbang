<?php

namespace App\Repositories;

use App\Models\PotensiJagung;

class PotensiJagungRepository
{
    public function getAll()
    {
        return PotensiJagung::latest()->paginate(10);
    }

    public function find($id)
    {
        return PotensiJagung::findOrFail($id);
    }

    public function create(array $data)
    {
        return PotensiJagung::create($data);
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
