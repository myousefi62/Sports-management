<?php

namespace App\Containers\Testll\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindTestllByIdAction extends Action
{
    public function run(Request $request)
    {
        $testll = Apiato::call('Testll@FindTestllByIdTask', [$request->id]);

        return $testll;
    }
}
