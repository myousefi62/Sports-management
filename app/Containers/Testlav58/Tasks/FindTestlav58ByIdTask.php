<?php

namespace App\Containers\Testlav58\Tasks;

use App\Containers\Testlav58\Data\Repositories\Testlav58Repository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindTestlav58ByIdTask extends Task
{

    protected $repository;

    public function __construct(Testlav58Repository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            //return $this->repository->find($id);
            //DB::table('users')->where('name', 'John')->first();
          //return $this->repository->findWhereIn('id',[1,2,3]);
          return $this->repository->findWhere(['id'=>$id]);
          //$this->repository->scopeQuery()
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
