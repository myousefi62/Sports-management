<?php

/**
 * @apiGroup           Login
 * @apiName            findLoginById
 *
 * @api                {GET} /v1/logins/:id Endpoint title here..
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
$router->get('logins/{id}', [
    'as' => 'api_login_find_login_by_id',
    'uses'  => 'Controller@findLoginById',
    'middleware' => [
      'auth:api',
    ],
]);
