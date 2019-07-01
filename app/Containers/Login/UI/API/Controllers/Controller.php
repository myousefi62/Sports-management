<?php

namespace App\Containers\Login\UI\API\Controllers;

use App\Containers\Login\UI\API\Requests\LoginRequest;
use App\Containers\Login\UI\API\Requests\DeleteLoginRequest;
use App\Containers\Login\UI\API\Requests\GetAllLoginsRequest;
use App\Containers\Login\UI\API\Requests\FindLoginByIdRequest;
use App\Containers\Login\UI\API\Requests\UpdateLoginRequest;
use App\Containers\Login\UI\API\Transformers\LoginTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;
use PhpParser\Node\Stmt\Return_;
use App\Ship\Transporters\DataTransporter;

/**
 * Class Controller
 *
 * @package App\Containers\Login\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Loginv1(LoginRequest $request)
    {
      $login = Apiato::call('Login@LoginAction', [new DataTransporter($request)]);
      //Return($login['id']);
//      echo $login[0]->id;
      //print_r($login[0]);
      Return($this->json($login));
      //return $this->created($this->transform($login, LoginTransformer::class));
    }

//    /**
//     * @param FindLoginByIdRequest $request
//     * @return array
//     */
//    public function findLoginById(FindLoginByIdRequest $request)
//    {
//        $login = Apiato::call('Login@FindLoginByIdAction', [$request]);
//
//        return $this->transform($login, LoginTransformer::class);
//    }
//
//    /**
//     * @param GetAllLoginsRequest $request
//     * @return array
//     */
//    public function getAllLogins(GetAllLoginsRequest $request)
//    {
//        $logins = Apiato::call('Login@GetAllLoginsAction', [$request]);
//
//        return $this->transform($logins, LoginTransformer::class);
//    }
//
//    /**
//     * @param UpdateLoginRequest $request
//     * @return array
//     */
//    public function updateLogin(UpdateLoginRequest $request)
//    {
//        $login = Apiato::call('Login@UpdateLoginAction', [$request]);
//
//        return $this->transform($login, LoginTransformer::class);
//    }
//
//    /**
//     * @param DeleteLoginRequest $request
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function deleteLogin(DeleteLoginRequest $request)
//    {
//        Apiato::call('Login@DeleteLoginAction', [$request]);
//
//        return $this->noContent();
//    }
}
