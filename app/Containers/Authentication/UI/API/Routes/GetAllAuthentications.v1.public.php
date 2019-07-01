<?php

/**
 * @apiGroup           Authentication
 * @apiName            getAllAuthentications
 *
 * @api                {GET} /v1/authentications Endpoint title here..
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
$router->get('authentications', [
    'as' => 'api_authentication_get_all_authentications',
    'uses'  => 'Controller@getAllAuthentications',
    'middleware' => [
      'auth:api',
    ],
]);
