<?php

/**
 * @apiGroup           Login
 * @apiName            updateLogin
 *
 * @api                {PATCH} /v1/logins/:id Endpoint title here..
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
$router->patch('logins/{id}', [
    'as' => 'api_login_update_login',
    'uses'  => 'Controller@updateLogin',
    'middleware' => [
      'auth:api',
    ],
]);
