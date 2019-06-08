<?php

/**
 * @apiGroup           Hello
 * @apiName            createHello
 *
 * @api                {POST} /v1/hellos Endpoint title here..
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
$router->post('hellos', [
    'as' => 'api_hello_create_hello',
    'uses'  => 'Controller@createHello',
]);
