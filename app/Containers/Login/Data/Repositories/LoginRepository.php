<?php

namespace App\Containers\Login\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LoginRepository
 */
class LoginRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
