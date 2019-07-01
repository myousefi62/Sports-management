<?php

namespace App\Containers\Testlav58\UI\API\Controllers;

use App\Containers\Testlav58\UI\API\Requests\CreateTestlav58Request;
use App\Containers\Testlav58\UI\API\Requests\DeleteTestlav58Request;
use App\Containers\Testlav58\UI\API\Requests\GetAllTestlav58sRequest;
use App\Containers\Testlav58\UI\API\Requests\FindTestlav58ByIdRequest;
use App\Containers\Testlav58\UI\API\Requests\UpdateTestlav58Request;
use App\Containers\Testlav58\UI\API\Transformers\Testlav58Transformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Testlav58\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateTestlav58Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTestlav58(CreateTestlav58Request $request)
    {
        $testlav58 = Apiato::call('Testlav58@CreateTestlav58Action', [$request]);
      return $this->json($testlav58);
        //return $this->created($this->transform($testlav58, Testlav58Transformer::class));
    }

    /**
     * @param FindTestlav58ByIdRequest $request
     * @return array
     */
    public function findTestlav58ById(FindTestlav58ByIdRequest $request)
    {
        $testlav58 = Apiato::call('Testlav58@FindTestlav58ByIdAction', [$request]);
        //return $this->json($testlav58);
        return $this->transform($testlav58, Testlav58Transformer::class);
    }

    /**
     * @param GetAllTestlav58sRequest $request
     * @return array
     */
    public function getAllTestlav58s(GetAllTestlav58sRequest $request)
    {
        $testlav58s = Apiato::call('Testlav58@GetAllTestlav58sAction', [$request]);
        //return $testlav58s;
        return $this->transform($testlav58s, Testlav58Transformer::class);
    }

    /**
     * @param UpdateTestlav58Request $request
     * @return array
     */
    public function updateTestlav58(UpdateTestlav58Request $request)
    {
        $testlav58 = Apiato::call('Testlav58@UpdateTestlav58Action', [$request]);

        return $this->transform($testlav58, Testlav58Transformer::class);
    }

    /**
     * @param DeleteTestlav58Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteTestlav58(DeleteTestlav58Request $request)
    {
        Apiato::call('Testlav58@DeleteTestlav58Action', [$request]);

        return $this->noContent();
    }
}
