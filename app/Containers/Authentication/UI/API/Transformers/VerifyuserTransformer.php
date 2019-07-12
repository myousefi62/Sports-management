<?php

namespace App\Containers\Authentication\UI\API\Transformers;

use App\Containers\Authentication\Models\Verify_user;
use App\Ship\Parents\Transformers\Transformer;

class VerifyuserTransformer extends Transformer
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
     * @param Verify_user $entity
     *
     * @return array
     */
    public function transform(Verify_user $entity)
    {
        $response = [
            'object' => 'Verify_user',
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
