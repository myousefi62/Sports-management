<?php

namespace App\Containers\Authentication\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AuthenticationRepository
 */
class AuthenticationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
