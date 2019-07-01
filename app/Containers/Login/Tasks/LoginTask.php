<?php

namespace App\Containers\Login\Tasks;

use App\Containers\Login\Data\Repositories\LoginRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class LoginTask extends Task
{
    protected $repository;

    public function __construct(LoginRepository $repository)
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
