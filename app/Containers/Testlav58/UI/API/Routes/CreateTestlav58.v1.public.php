<?php

/**
 * @apiGroup           Testlav58
 * @apiName            createTestlav58
 *
 * @api                {POST} /v1/testlav58s Endpoint title here..
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
$router->post('testlav58s', [
    'as' => 'api_testlav58_create_testlav58',
    'uses'  => 'Controller@createTestlav58',

]);
