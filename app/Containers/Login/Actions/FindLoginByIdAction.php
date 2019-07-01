<?php

namespace App\Containers\Login\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindLoginByIdAction extends Action
{
    public function run(Request $request)
    {
        $login = Apiato::call('Login@FindLoginByIdTask', [$request->id]);

        return $login;
    }
}
