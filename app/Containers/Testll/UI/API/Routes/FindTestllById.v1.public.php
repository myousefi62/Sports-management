<?php

/**
 * @apiGroup           Testll
 * @apiName            findTestllById
 *
 * @api                {GET} /v1/testlls/:id Endpoint title here..
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
$router->get('testlls/{id}', [
    'as' => 'api_testll_find_testll_by_id',
    'uses'  => 'Controller@findTestllById',
    'middleware' => [
      'auth:api',
    ],
]);
