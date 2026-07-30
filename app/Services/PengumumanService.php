<?php

namespace App\Services;

use App\Repositories\PengumumanRepository;
use Illuminate\Support\Facades\Log;
use Exception;

class PengumumanService
{
    protected $repository;

    public function __construct(PengumumanRepository $repository)
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
            Log::error('Gagal membuat data Pengumuman: ' . $e->getMessage());
            throw $e;
        }
    }

    public function update($id, array $data)
    {
        try {
            return $this->repository->update($id, $data);
        } catch (Exception $e) {
            Log::error('Gagal mengubah data Pengumuman: ' . $e->getMessage());
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $e) {
            Log::error('Gagal menghapus data Pengumuman: ' . $e->getMessage());
            throw $e;
        }
    }
}
