<?php

namespace App\Containers\Login\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class HistoryLoginRepository
 */
class HistoryLoginRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
