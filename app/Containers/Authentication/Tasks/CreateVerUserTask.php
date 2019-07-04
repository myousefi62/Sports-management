<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\Authentication\Data\Repositories\veruserRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateVerUserTask extends Task
{

    protected $repository;

    public function __construct(veruserRepository $repository)
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
