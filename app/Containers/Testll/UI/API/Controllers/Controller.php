<?php

namespace App\Containers\Testll\UI\API\Controllers;

use App\Containers\Testll\UI\API\Requests\CreateTestllRequest;
use App\Containers\Testll\UI\API\Requests\DeleteTestllRequest;
use App\Containers\Testll\UI\API\Requests\GetAllTestllsRequest;
use App\Containers\Testll\UI\API\Requests\FindTestllByIdRequest;
use App\Containers\Testll\UI\API\Requests\UpdateTestllRequest;
use App\Containers\Testll\UI\API\Transformers\TestllTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Testll\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateTestllRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTestll(CreateTestllRequest $request)
    {
        $testll = Apiato::call('Testll@CreateTestllAction', [$request]);

        return $this->created($this->transform($testll, TestllTransformer::class));
    }

    /**
     * @param FindTestllByIdRequest $request
     * @return array
     */
    public function findTestllById(FindTestllByIdRequest $request)
    {
        $testll = Apiato::call('Testll@FindTestllByIdAction', [$request]);

        return $this->transform($testll, TestllTransformer::class);
    }

    /**
     * @param GetAllTestllsRequest $request
     * @return array
     */
    public function getAllTestlls(GetAllTestllsRequest $request)
    {
        $testlls = Apiato::call('Testll@GetAllTestllsAction', [$request]);

        return $this->transform($testlls, TestllTransformer::class);
    }

    /**
     * @param UpdateTestllRequest $request
     * @return array
     */
    public function updateTestll(UpdateTestllRequest $request)
    {
        $testll = Apiato::call('Testll@UpdateTestllAction', [$request]);

        return $this->transform($testll, TestllTransformer::class);
    }

    /**
     * @param DeleteTestllRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteTestll(DeleteTestllRequest $request)
    {
        Apiato::call('Testll@DeleteTestllAction', [$request]);

        return $this->noContent();
    }
}
