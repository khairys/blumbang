<?php

namespace App\Repositories;

use App\Models\PengaturanWebsite;

class PengaturanWebsiteRepository
{
    public function getAll()
    {
        return PengaturanWebsite::latest()->paginate(10);
    }

    public function find($id)
    {
        return PengaturanWebsite::findOrFail($id);
    }

    public function create(array $data)
    {
        return PengaturanWebsite::create($data);
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
