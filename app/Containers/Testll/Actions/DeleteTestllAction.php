<?php

namespace App\Containers\Testll\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteTestllAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Testll@DeleteTestllTask', [$request->id]);
    }
}
