<?php

namespace App\Containers\Hello\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class HelloRepository
 */
class HelloRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
