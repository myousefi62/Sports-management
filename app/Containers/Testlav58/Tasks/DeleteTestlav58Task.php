<?php

namespace App\Containers\Testlav58\Tasks;

use App\Containers\Testlav58\Data\Repositories\Testlav58Repository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteTestlav58Task extends Task
{

    protected $repository;

    public function __construct(Testlav58Repository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
