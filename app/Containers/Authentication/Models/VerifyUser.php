<?php

namespace App\Containers\Authentication\Models;

use App\Ship\Parents\Models\Model;

class VerifyUser extends Model
{
    protected $fillable = [
      'user_id',
      'signin_id',
      'phone_number',
      'verify_code',
      'status_id',
      'exp_date',
      'ip'
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
    protected $resourceKey = 'verifyusers';
}
