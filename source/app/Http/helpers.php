<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/17/2016
 * Time:    12:54 PM
 **/
use \App\Models\User;

define('USER_STATUS_ACTIVE', User::STATUS_ACTIVE);
define('USER_STATUS_INACTIVE', User::STATUS_INACTIVE);
define('USER_ROLE_SUPER_ADMIN', User::ROLE_SUPER_ADMIN);
define('USER_ROLE_CONTENT_ADMIN', User::ROLE_CONTENT_ADMIN);
define('USER_ROLE_ACADEMIC', User::ROLE_ACADEMIC);

function redirectIfAuthSuccess()
{
    return url('/');
}

/**
 * @param string $action        Controller@method
 * @param string $namespace     No backslash at the beginning or end
 * @param array $args           key->value pairs or just simple array
 * @param array $methods        Http verbs, not so necessary though
 * @return mixed
 */
function run_action($action, $namespace=null, $args=[], $methods=[])
{
    $action = 'App\Http\Controllers' . ( $namespace ? '\\'.$namespace.'\\'.$action : '\\'.$action);
    $request = request();
    
    $pattern = [];
    foreach ($args as $key=>$value) 
        $pattern_arr[] = '{'.$key.'}';
    
    $route = new \Illuminate\Routing\Route($methods, implode('/', $pattern), ['uses' =>$action]);
    
    foreach ($args as $key=>$value) 
        $route->defaults($key, $value);
    
    $route->bind($request);
    
    return $route->run($request);
}

/**
 * @param $data
 * @return \Illuminate\Http\JsonResponse
 */
function to_json($data)
{
    if(is_json($data)) return $data;
    return response()->json($data);
}

/**
 * @param $mixed
 * @return bool
 */
function is_json($mixed)
{
    return (is_string($mixed) and json_decode($mixed) and json_last_error() == JSON_ERROR_NONE);
}