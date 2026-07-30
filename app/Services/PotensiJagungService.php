<?php

namespace App\Services;

use App\Repositories\PotensiJagungRepository;
use Illuminate\Support\Facades\Log;
use Exception;

class PotensiJagungService
{
    protected $repository;

    public function __construct(PotensiJagungRepository $repository)
    {
        $this->repository = $repository;
    }
}
