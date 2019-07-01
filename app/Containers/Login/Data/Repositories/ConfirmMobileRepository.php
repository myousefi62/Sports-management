<?php

namespace App\Containers\Login\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ConfirmMobileRepository
 */
class ConfirmMobileRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
