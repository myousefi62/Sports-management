<?php

namespace App\Containers\Testlav58\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class Testlav58Repository
 */
class Testlav58Repository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        //'name'=>'=',
    ];

}
