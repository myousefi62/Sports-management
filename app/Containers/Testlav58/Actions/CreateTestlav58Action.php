<?php

namespace App\Containers\Testlav58\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateTestlav58Action extends Action
{
    public function run(Request $request)
    {
        //$data = $request->sanitizeInput([
        //'name'=>$request->name
        //]);
        $data = $request->all();
        $testlav58 = Apiato::call('Testlav58@CreateTestlav58Task', [$data]);

        return $testlav58;
    }
}
