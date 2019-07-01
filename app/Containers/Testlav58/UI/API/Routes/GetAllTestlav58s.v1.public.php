<?php

/**
 * @apiGroup           Testlav58
 * @apiName            getAllTestlav58s
 *
 * @api                {GET} /v1/testlav58s Endpoint title here..
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
$router->get('testlav58s', [
    'as' => 'api_testlav58_get_all_testlav58s',
    'uses'  => 'Controller@getAllTestlav58s',

]);
