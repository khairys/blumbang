<?php

namespace App\Services;

use App\Repositories\ProfilDesaRepository;
use Illuminate\Support\Facades\Log;
use Exception;

class ProfilDesaService
{
    protected $repository;

    public function __construct(ProfilDesaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function create(array $data)
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            Log::error('Gagal membuat data ProfilDesa: ' . $e->getMessage());
            throw $e;
        }
    }

    public function update($id, array $data)
    {
        try {
            return $this->repository->update($id, $data);
        } catch (Exception $e) {
            Log::error('Gagal mengubah data ProfilDesa: ' . $e->getMessage());
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $e) {
            Log::error('Gagal menghapus data ProfilDesa: ' . $e->getMessage());
            throw $e;
        }
    }
}
