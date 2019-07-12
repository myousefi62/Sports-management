<?php

namespace App\Containers\Testlav58\Tasks;

use App\Containers\Testlav58\Data\Repositories\Testlav58Repository;
use App\Ship\Parents\Tasks\Task;

class GetAllTestlav58sTask extends Task
{

    protected $repository;

    public function __construct(Testlav58Repository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}