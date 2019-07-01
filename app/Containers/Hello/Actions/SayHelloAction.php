<?php

namespace App\Containers\Hello\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class SayHelloAction extends Action
{
  public function run()
  {
    return [trans('localization::messages.welcome')];
  }
}

