<?php

namespace App\Containers\Testlav58\UI\API\Transformers;

use App\Containers\Testlav58\Models\Testlav58;
use App\Ship\Parents\Transformers\Transformer;

class Testlav58Transformer extends Transformer
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
     * @param Testlav58 $entity
     *
     * @return array
     */
    public function transform(Testlav58 $entity)
    {
        $response = [
            'object' => 'Testlav58',
            'id' => $entity->getHashedKey(),
            'name'=>$entity->name,
//            'created_at' => $entity->created_at,
//            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            //'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
