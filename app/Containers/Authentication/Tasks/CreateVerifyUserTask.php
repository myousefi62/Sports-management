<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\Authentication\Data\Repositories\verifyuserRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateVerifyUserTask extends Task
{

    protected $repository;

    public function __construct(verifyuserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
      //return $this->repository;
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
