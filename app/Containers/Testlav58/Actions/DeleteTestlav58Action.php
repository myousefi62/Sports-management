<?php

namespace App\Containers\Testlav58\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteTestlav58Action extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Testlav58@DeleteTestlav58Task', [$request->id]);
    }
}
