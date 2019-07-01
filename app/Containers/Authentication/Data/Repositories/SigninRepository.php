<?php

namespace App\Containers\Authentication\Data\Repositories;

use App\Containers\Authentication\Models\Signin;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class SigninRepository
 */
class SigninRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
