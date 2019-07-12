<?php

/**
 * @apiGroup           Notification
 * @apiName            updateNotification
 *
 * @api                {PATCH} /v1/notifications/:id Endpoint title here..
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
$router->patch('notifications/{id}', [
    'as' => 'api_notification_update_notification',
    'uses'  => 'Controller@updateNotification',
    'middleware' => [
      'auth:api',
    ],
]);
