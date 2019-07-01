<?php

namespace App\Containers\Testlav58\Models;

use App\Ship\Parents\Models\Model;

class Testlav58 extends Model
{
    protected $fillable = [
      'name'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
      'created_at',
      'updated_at',
    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'testlav58s';
}
