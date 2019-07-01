<?php

/**
 * @apiGroup           Authentication
 * @apiName            updateAuthentication
 *
 * @api                {PATCH} /v1/authentications/:id Endpoint title here..
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
$router->patch('authentications/{id}', [
    'as' => 'api_authentication_update_authentication',
    'uses'  => 'Controller@updateAuthentication',
    'middleware' => [
      'auth:api',
    ],
]);
