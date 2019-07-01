<?php

namespace App\Containers\Testll\Tasks;

use App\Containers\Testll\Data\Repositories\TestllRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllTestllsTask extends Task
{

    protected $repository;

    public function __construct(TestllRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
