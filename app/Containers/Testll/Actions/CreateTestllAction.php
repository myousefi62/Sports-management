<?php

namespace App\Containers\Testll\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateTestllAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $testll = Apiato::call('Testll@CreateTestllTask', [$data]);

        return $testll;
    }
}
