<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\Authentication\Data\Repositories\AuthenticationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAuthenticationsTask extends Task
{

    protected $repository;

    public function __construct(AuthenticationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
