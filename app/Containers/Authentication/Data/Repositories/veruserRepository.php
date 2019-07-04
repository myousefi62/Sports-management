<?php

namespace App\Containers\Authentication\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class veruserRepository
 */
class veruserRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
