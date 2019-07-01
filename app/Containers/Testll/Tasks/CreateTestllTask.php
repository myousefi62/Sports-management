<?php

namespace App\Containers\Testll\Tasks;

use App\Containers\Testll\Data\Repositories\TestllRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateTestllTask extends Task
{

    protected $repository;

    public function __construct(TestllRepository $repository)
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
