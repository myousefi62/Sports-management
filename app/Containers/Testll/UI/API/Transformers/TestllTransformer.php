<?php

namespace App\Containers\Testll\UI\API\Transformers;

use App\Containers\Testll\Models\Testll;
use App\Ship\Parents\Transformers\Transformer;

class TestllTransformer extends Transformer
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
     * @param Testll $entity
     *
     * @return array
     */
    public function transform(Testll $entity)
    {
        $response = [
            'object' => 'Testll',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
