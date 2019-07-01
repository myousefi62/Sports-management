<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAuthenticationByIdAction extends Action
{
    public function run(Request $request)
    {
        $authentication = Apiato::call('Authentication@FindAuthenticationByIdTask', [$request->id]);

        return $authentication;
    }
}
