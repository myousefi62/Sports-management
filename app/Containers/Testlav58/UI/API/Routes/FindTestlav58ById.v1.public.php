<?php

/**
 * @apiGroup           Testlav58
 * @apiName            findTestlav58ById
 *
 * @api                {GET} /v1/testlav58s/:id Endpoint title here..
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
$router->get('testlav58s/{id}', [
    'as' => 'api_testlav58_find_testlav58_by_id',
    'uses'  => 'Controller@findTestlav58ById',
]);
