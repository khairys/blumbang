<?php

namespace App\Services;

use App\Repositories\PotensiDesaRepository;
use Illuminate\Support\Facades\Log;
use Exception;

class PotensiDesaService
{
    protected $repository;

    public function __construct(PotensiDesaRepository $repository)
    {
        $this->repository = $repository;
    }
}
