<?php

namespace App\Containers\Login\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteLoginAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Login@DeleteLoginTask', [$request->id]);
    }
}
