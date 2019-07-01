<?php

namespace App\Containers\Testll\Tasks;

use App\Containers\Testll\Data\Repositories\TestllRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateTestllTask extends Task
{

    protected $repository;

    public function __construct(TestllRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
