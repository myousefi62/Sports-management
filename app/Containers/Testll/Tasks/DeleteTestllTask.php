<?php

namespace App\Containers\Testll\Tasks;

use App\Containers\Testll\Data\Repositories\TestllRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteTestllTask extends Task
{

    protected $repository;

    public function __construct(TestllRepository $repository)
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
