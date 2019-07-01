<?php

/**
 * @apiGroup           Login
 * @apiName            getAllLogins
 *
 * @api                {GET} /v1/logins Endpoint title here..
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
$router->get('logins', [
    'as' => 'api_login_get_all_logins',
    'uses'  => 'Controller@getAllLogins',
    'middleware' => [
      'auth:api',
    ],
]);
