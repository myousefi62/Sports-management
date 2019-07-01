<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\Authentication\Data\Repositories\SigninRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class SigninTask extends Task
{
    protected $repository;

    public function __construct(SigninRepository $repository)
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
