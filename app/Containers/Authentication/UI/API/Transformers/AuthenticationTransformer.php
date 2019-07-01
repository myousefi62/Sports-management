<?php

namespace App\Containers\Authentication\UI\API\Transformers;

use App\Containers\Authentication\Models\Authentication;
use App\Ship\Parents\Transformers\Transformer;

class AuthenticationTransformer extends Transformer
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
     * @param Authentication $entity
     *
     * @return array
     */
    public function transform(Authentication $entity)
    {
        $response = [
            'object' => 'Authentication',
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
