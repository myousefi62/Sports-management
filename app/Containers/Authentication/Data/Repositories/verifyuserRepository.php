<?php

namespace App\Containers\Authentication\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class verifyuserRepository
 */
class verifyuserRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
