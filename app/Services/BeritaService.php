<?php

namespace App\Services;

use App\Repositories\BeritaRepository;
use Illuminate\Support\Facades\Log;
use Exception;

class BeritaService
{
    protected $repository;

    public function __construct(BeritaRepository $repository)
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
            Log::error('Gagal membuat data Berita: ' . $e->getMessage());
            throw $e;
        }
    }

    public function update($id, array $data)
    {
        try {
            return $this->repository->update($id, $data);
        } catch (Exception $e) {
            Log::error('Gagal mengubah data Berita: ' . $e->getMessage());
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $e) {
            Log::error('Gagal menghapus data Berita: ' . $e->getMessage());
            throw $e;
        }
    }
}
