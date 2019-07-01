<?php

namespace App\Containers\Hello\UI\API\Transformers;

use App\Containers\Hello\Models\Hello;
use App\Ship\Parents\Transformers\Transformer;

class HelloTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Hello $entity
     *
     * @return array
     */
    public function transform(Hello $entity)
    {
        $response = [
            'object' => 'Hello',
            'StatusID' => $entity->StatusID,
            'FinalConfirmID' => $entity->FinalConfirmID,

        ];

//        $response = $this->ifAdmin([
//            'real_id'    => $entity->id,
//            // 'deleted_at' => $entity->deleted_at,
//        ], $response);

        return $response;
    }
}
