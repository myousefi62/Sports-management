<?php

/**
 * @apiGroup           Testll
 * @apiName            deleteTestll
 *
 * @api                {DELETE} /v1/testlls/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('testlls/{id}', [
    'as' => 'api_testll_delete_testll',
    'uses'  => 'Controller@deleteTestll',
    'middleware' => [
      'auth:api',
    ],
]);
