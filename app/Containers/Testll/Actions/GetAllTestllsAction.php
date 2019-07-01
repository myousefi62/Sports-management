<?php

namespace App\Containers\Testll\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllTestllsAction extends Action
{
    public function run(Request $request)
    {
        $testlls = Apiato::call('Testll@GetAllTestllsTask', [], ['addRequestCriteria']);

        return $testlls;
    }
}
