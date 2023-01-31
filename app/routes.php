<?php
namespace Framework\Routing;
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 05.03.2020
 * Time: 12:30
 */
Router::addRoute(new \Framework\Routing\Route('user/{user_name}/group/{group_name}', 'HelloController@data', Route::METHOD_GET));
Router::addRoute(new \Framework\Routing\Route('hello', 'HelloController@index', Route::METHOD_GET));

