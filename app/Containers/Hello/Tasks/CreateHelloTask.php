<?php

namespace App\Containers\Hello\Tasks;

use App\Containers\Hello\Data\Repositories\HelloRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateHelloTask extends Task
{

    protected $repository;

    public function __construct(HelloRepository $repository)
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
