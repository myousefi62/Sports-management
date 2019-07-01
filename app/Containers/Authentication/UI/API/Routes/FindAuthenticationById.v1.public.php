<?php

/**
 * @apiGroup           Authentication
 * @apiName            findAuthenticationById
 *
 * @api                {GET} /v1/authentications/:id Endpoint title here..
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
$router->get('authentications/{id}', [
    'as' => 'api_authentication_find_authentication_by_id',
    'uses'  => 'Controller@findAuthenticationById',
    'middleware' => [
      'auth:api',
    ],
]);
