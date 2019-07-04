<?php

namespace App\Containers\Authentication\UI\API\Controllers;

//use App\Containers\Login\UI\API\Requests\LoginRequest;
//use  App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Containers\Authentication\UI\API\Requests\SigninRequest;
use App\Ship\Parents\Requests\Request;
use App\Ship\Transporters\DataTransporter;

use App\Containers\Authentication\UI\API\Requests\CreateVerUserRequest;
use App\Containers\Authentication\UI\API\Requests\CreateVerifyUserRequest;

use App\Containers\Authentication\UI\API\Requests\CreateAuthenticationRequest;
use App\Containers\Authentication\UI\API\Requests\DeleteAuthenticationRequest;
use App\Containers\Authentication\UI\API\Requests\GetAllAuthenticationsRequest;
use App\Containers\Authentication\UI\API\Requests\FindAuthenticationByIdRequest;
use App\Containers\Authentication\UI\API\Requests\UpdateAuthenticationRequest;
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
   * @param LoginRequest $request
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
   * @param LoginRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function verifyuser(CreateVerifyUserRequest $request)
  {
  return $this->json($request->all());

    //$login = Apiato::call('Authentication@CreateVerUserAction', [$request]);
    //Return($login['id']);new DataTransporter($request)
//      echo $login[0]->id;
    //print_r($login[0]);
    //Return($this->json($login));
    //return $this->created($this->transform($login, LoginTransformer::class));
  }

}
