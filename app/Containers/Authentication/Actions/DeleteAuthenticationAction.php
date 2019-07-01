<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAuthenticationAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Authentication@DeleteAuthenticationTask', [$request->id]);
    }
}
