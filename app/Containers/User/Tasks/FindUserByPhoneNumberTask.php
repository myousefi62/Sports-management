<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindUserByEmailTask
 *
 * @author  Sebastian Weckend
 */
class FindUserByPhoneNumberTask extends Task
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $email
     *
     * @return User
     * @throws NotFoundException
     */
    public function run(string $phone_number)//: User
    {
        try {
            return $this->repository->findByField('phone_number', $phone_number)->first();
        } catch (Exception $e) {
//          return null;
            throw new NotFoundException();
        }
    }
}
