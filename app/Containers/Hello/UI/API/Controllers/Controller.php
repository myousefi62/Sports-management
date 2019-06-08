<?php

namespace App\Containers\Hello\UI\API\Controllers;

use App\Containers\Hello\UI\API\Requests\CreateHelloRequest;
use App\Containers\Hello\UI\API\Requests\DeleteHelloRequest;
use App\Containers\Hello\UI\API\Requests\GetAllHellosRequest;
use App\Containers\Hello\UI\API\Requests\FindHelloByIdRequest;
use App\Containers\Hello\UI\API\Requests\UpdateHelloRequest;
use App\Containers\Hello\UI\API\Transformers\HelloTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Hello\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateHelloRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createHello(CreateHelloRequest $request)
    {

      $hello = Apiato::call('Hello@CreateHelloAction', [$request]);
      return $this->created($this->transform($hello, HelloTransformer::class));

    }
  /**
   * @param CreateHelloRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function sayHello()
  {
    $helloMessage = Apiato::call('Hello@SayHelloAction');
return 
    $this->json([
      $helloMessage
    ]);
  }
}
