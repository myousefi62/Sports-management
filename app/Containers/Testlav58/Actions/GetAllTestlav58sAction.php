<?php

namespace App\Containers\Testlav58\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllTestlav58sAction extends Action
{
    public function run(Request $request)
    {
        $testlav58s = Apiato::call('Testlav58@GetAllTestlav58sTask', [], ['addRequestCriteria']);

        return $testlav58s;
    }
}
