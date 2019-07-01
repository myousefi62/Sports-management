<?php

/**
 * @apiGroup           Authentication
 * @apiName            createAuthentication
 *
 * @api                {POST} /v1/authentications Endpoint title here..
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
$router->post('authentications', [
    'as' => 'api_authentication_create_authentication',
    'uses'  => 'Controller@createAuthentication',
    'middleware' => [
      'auth:api',
    ],
]);
