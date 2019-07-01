<?php

namespace App\Containers\Testlav58\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use function GuzzleHttp\Promise\all;

class FindTestlav58ByIdAction extends Action
{
    public function run(Request $request)
    {
        $testlav58 = Apiato::call('Testlav58@FindTestlav58ByIdTask', [$request->id]);

        return $testlav58;
    }
}
