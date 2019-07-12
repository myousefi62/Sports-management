<?php

namespace App\Containers\Notification\UI\API\Transformers;

use App\Containers\Notification\Models\Notification;
use App\Ship\Parents\Transformers\Transformer;

class NotificationTransformer extends Transformer
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
     * @param Notification $entity
     *
     * @return array
     */
    public function transform(Notification $entity)
    {
        $response = [
            'object' => 'Notification',
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
