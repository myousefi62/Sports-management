<?php

namespace App\Containers\Login\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateLoginAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $login = Apiato::call('Login@UpdateLoginTask', [$request->id, $data]);

        return $login;
    }
}
