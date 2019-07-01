<?php

namespace App\Containers\Testlav58\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateTestlav58Action extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $testlav58 = Apiato::call('Testlav58@UpdateTestlav58Task', [$request->id, $data]);

        return $testlav58;
    }
}
