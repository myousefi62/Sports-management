<?php

namespace App\Containers\Authentication\UI\API\Controllers;

//use App\Containers\Login\UI\API\Requests\LoginRequest;
//use  App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Containers\Authentication\UI\API\Requests\SigninRequest;
use App\Ship\Transporters\DataTransporter;

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
  public function Login(LoginRequest $request)
  {
    $login = Apiato::call('Login@LoginAction', [new DataTransporter($request)]);
    //Return($login['id']);
//      echo $login[0]->id;
    //print_r($login[0]);
    Return($this->json($login));
    //return $this->created($this->transform($login, LoginTransformer::class));
  }
//    /**
//     * @param CreateAuthenticationRequest $request
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function createAuthentication(CreateAuthenticationRequest $request)
//    {
//        $authentication = Apiato::call('Authentication@CreateAuthenticationAction', [$request]);
//
//        return $this->created($this->transform($authentication, AuthenticationTransformer::class));
//    }
//
//    /**
//     * @param FindAuthenticationByIdRequest $request
//     * @return array
//     */
//    public function findAuthenticationById(FindAuthenticationByIdRequest $request)
//    {
//        $authentication = Apiato::call('Authentication@FindAuthenticationByIdAction', [$request]);
//
//        return $this->transform($authentication, AuthenticationTransformer::class);
//    }
//
//    /**
//     * @param GetAllAuthenticationsRequest $request
//     * @return array
//     */
//    public function getAllAuthentications(GetAllAuthenticationsRequest $request)
//    {
//        $authentications = Apiato::call('Authentication@GetAllAuthenticationsAction', [$request]);
//
//        return $this->transform($authentications, AuthenticationTransformer::class);
//    }
//
//    /**
//     * @param UpdateAuthenticationRequest $request
//     * @return array
//     */
//    public function updateAuthentication(UpdateAuthenticationRequest $request)
//    {
//        $authentication = Apiato::call('Authentication@UpdateAuthenticationAction', [$request]);
//
//        return $this->transform($authentication, AuthenticationTransformer::class);
//    }
//
//    /**
//     * @param DeleteAuthenticationRequest $request
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function deleteAuthentication(DeleteAuthenticationRequest $request)
//    {
//        Apiato::call('Authentication@DeleteAuthenticationAction', [$request]);
//
//        return $this->noContent();
//    }
}
