<?php

namespace App\Containers\Hello\UI\API\Controllers;

use App\Containers\Hello\UI\API\Requests\CreateHelloRequest;
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

//      $hello = Apiato::call('Hello@CreateHelloAction', [$request]);
//      return $this->created($this->transform($hello, HelloTransformer::class));
//      return $this->transform(DataTransporter($request),HelloTransformer::class);
//      return $this->json($request->all());
    }
  /**
   * @param CreateHelloRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function sayHello()
  {
    $helloMessage = Apiato::call('Hello@SayHelloAction');
    return $this->json($helloMessage);
  }
}
