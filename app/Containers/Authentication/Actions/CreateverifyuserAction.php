<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateverifyuserAction extends Action
{
    public function run(Request $request)
    {
//        $data = $request->sanitizeInput([
//            // add your request data here
//        ]);
        $data = $request->all();
        $verifyuser = Apiato::call('Authentication@CreateVerifyUserTask', [$data]);

        return $verifyuser;
    }
}
