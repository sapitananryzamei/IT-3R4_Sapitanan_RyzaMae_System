<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('users', [
    'as' => 'users', 'uses' => 'UserController@getUsers'
]);

$router->get('login', [
    'as' => 'login', 'uses' => 'UserController@loginpage'
]);

$router->post('validate', [
    'as' => 'validate', 'uses' => 'UserController@validateUser'
]);

$router->get('site', [
    'as' => 'site', 'uses' => 'UserController@sitepage'
]);

$router->post('createp', [
    'as' => 'createp', 'uses' => 'UserController@createpage'
]);

$router->post('create-user', [
    'as' => 'create-user', 'uses' => 'UserController@createUser'
]);

$router->post('edit', [
    'as' => 'edit', 'uses' => 'UserController@editpage'
]);

$router->post('update', [
    'as' => 'update', 'uses' => 'UserController@update'
]);

$router->post('delete', [
    'as' => 'delete', 'uses' => 'UserController@delete'
]);
