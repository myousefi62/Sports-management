<?php

namespace App\Containers\Hello\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateHelloAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([

        ]);

        $hello = Apiato::call('Hello@CreateHelloTask', [$data]);

        return $hello;
    }
}
