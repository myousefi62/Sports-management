<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateVerUserAction extends Action
{
    public function run(Request $request)
    {
//        $data = $request->sanitizeInput([
//            // add your request data here
//        ]);

        $veruser = Apiato::call('Authentication@CreateVerUserTask', [$data]);

        return $veruser;
    }
}
