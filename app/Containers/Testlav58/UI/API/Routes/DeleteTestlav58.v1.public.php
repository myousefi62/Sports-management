<?php

/**
 * @apiGroup           Testlav58
 * @apiName            deleteTestlav58
 *
 * @api                {DELETE} /v1/testlav58s/:id Endpoint title here..
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
$router->delete('testlav58s/{id}', [
    'as' => 'api_testlav58_delete_testlav58',
    'uses'  => 'Controller@deleteTestlav58',

]);
