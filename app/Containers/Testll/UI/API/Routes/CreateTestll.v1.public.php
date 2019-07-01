<?php

/**
 * @apiGroup           Testll
 * @apiName            createTestll
 *
 * @api                {POST} /v1/testlls Endpoint title here..
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
$router->post('testlls', [
    'as' => 'api_testll_create_testll',
    'uses'  => 'Controller@createTestll',
    'middleware' => [
      'auth:api',
    ],
]);
