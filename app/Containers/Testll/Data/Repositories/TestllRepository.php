<?php

namespace App\Containers\Testll\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class TestllRepository
 */
class TestllRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
