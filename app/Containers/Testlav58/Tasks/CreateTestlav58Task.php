<?php

namespace App\Containers\Testlav58\Tasks;

use App\Containers\Testlav58\Data\Repositories\Testlav58Repository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateTestlav58Task extends Task
{

    protected $repository;

    public function __construct(Testlav58Repository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
