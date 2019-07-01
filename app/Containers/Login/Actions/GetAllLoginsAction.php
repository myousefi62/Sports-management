<?php

namespace App\Containers\Login\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllLoginsAction extends Action
{
    public function run(Request $request)
    {
        $logins = Apiato::call('Login@GetAllLoginsTask', [], ['addRequestCriteria']);

        return $logins;
    }
}
