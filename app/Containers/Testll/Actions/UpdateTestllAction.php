<?php

namespace App\Containers\Testll\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateTestllAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $testll = Apiato::call('Testll@UpdateTestllTask', [$request->id, $data]);

        return $testll;
    }
}
