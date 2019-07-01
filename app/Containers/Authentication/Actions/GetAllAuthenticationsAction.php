<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAuthenticationsAction extends Action
{
    public function run(Request $request)
    {
        $authentications = Apiato::call('Authentication@GetAllAuthenticationsTask', [], ['addRequestCriteria']);

        return $authentications;
    }
}
