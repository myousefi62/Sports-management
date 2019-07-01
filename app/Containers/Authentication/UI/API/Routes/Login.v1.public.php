<?php

/**
 * @apiGroup           Authentication
 * @apiName            Login
 *
 * @api                {POST} /v1/ Endpoint title here..
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
$router->post('login', [
    'as' => 'api_authentication_login',
    'uses'  => 'Controller@Login',
]);
