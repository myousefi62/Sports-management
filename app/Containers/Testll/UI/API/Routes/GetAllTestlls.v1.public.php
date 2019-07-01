<?php

/**
 * @apiGroup           Testll
 * @apiName            getAllTestlls
 *
 * @api                {GET} /v1/testlls Endpoint title here..
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
$router->get('testlls', [
    'as' => 'api_testll_get_all_testlls',
    'uses'  => 'Controller@getAllTestlls',
    'middleware' => [
      'auth:api',
    ],
]);
