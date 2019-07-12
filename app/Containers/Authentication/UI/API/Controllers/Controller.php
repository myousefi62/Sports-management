<?php

namespace App\Containers\Authentication\UI\API\Controllers;

use App\Containers\Authentication\UI\API\Requests\SigninRequest;
use App\Containers\Authentication\UI\API\Requests\ConfirmRequest;
use App\Containers\Authentication\Data\Transporters\ConfirmTransporter;

//use App\Ship\Parents\Requests\Request;
use Illuminate\Http\Request;


use App\Ship\Transporters\DataTransporter;

use App\Containers\Authentication\UI\API\Transformers\AuthenticationTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Authentication\UI\API\Controllers
 */
class Controller extends ApiController
{
  /**
   * @param SigninRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function Signin(SigninRequest $request)
  {
    $login = Apiato::call('Authentication@SigninAction', [new DataTransporter($request)]);
    //Return($login['id']);
//      echo $login[0]->id;
    //print_r($login[0]);
    Return($this->json($login));
    //return $this->created($this->transform($login, LoginTransformer::class));
  }

  /**
   * @param ConfirmTransporter $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function Confirm(Request $request)
  {

    $Token = $request->header('Token');
    echo $Token;
    //dd($Token);
    return $this->json($request);
  }

}
