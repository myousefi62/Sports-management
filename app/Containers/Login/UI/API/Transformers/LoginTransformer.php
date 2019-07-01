<?php

namespace App\Containers\Login\UI\API\Transformers;

use App\Containers\Login\Models\Login;
use App\Ship\Parents\Transformers\Transformer;

class LoginTransformer extends Transformer
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
     * @param Login $entity
     *
     * @return array
     */
    public function transform(Login $entity)
    {
        $response = [
            'object' => 'Login',
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
