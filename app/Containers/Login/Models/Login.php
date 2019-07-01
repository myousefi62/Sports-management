<?php

namespace App\Containers\Login\Models;

use App\Ship\Parents\Models\Model;

class Login extends Model
{
    protected $fillable = [
      'user_id' ,
      'is_active',
      'ip',
      'exp_date',
      'uuid',
      'mac_address',
      'platform',
      'user_agent',
      'public_key',
      'device',
      'token_type'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

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
    protected $resourceKey = 'logins';
}
