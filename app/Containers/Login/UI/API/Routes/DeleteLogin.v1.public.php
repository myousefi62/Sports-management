<?php

/**
 * @apiGroup           Login
 * @apiName            deleteLogin
 *
 * @api                {DELETE} /v1/logins/:id Endpoint title here..
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
$router->delete('logins/{id}', [
    'as' => 'api_login_delete_login',
    'uses'  => 'Controller@deleteLogin',
    'middleware' => [
      'auth:api',
    ],
]);
