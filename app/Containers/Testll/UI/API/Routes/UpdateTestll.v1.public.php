<?php

/**
 * @apiGroup           Testll
 * @apiName            updateTestll
 *
 * @api                {PATCH} /v1/testlls/:id Endpoint title here..
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
$router->patch('testlls/{id}', [
    'as' => 'api_testll_update_testll',
    'uses'  => 'Controller@updateTestll',
    'middleware' => [
      'auth:api',
    ],
]);
