<?php

namespace App\Containers\Login\Tasks;

use App\Containers\Login\Data\Repositories\LoginRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllLoginsTask extends Task
{

    protected $repository;

    public function __construct(LoginRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
