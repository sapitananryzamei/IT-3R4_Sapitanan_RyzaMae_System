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


$router->get('/users',  'UserController@getUsers');

$router->get('/login', 'UserController@loginpage');

$router->post('/validate', 'UserController@validateUser');

$router->get('/site', 'UserController@sitepage');

$router->post('/createp', 'UserController@createpage');

$router->post('/createuser', 'UserController@createuser');

$router->post('/edit','UserController@editpage');

$router->post('/update',  'UserController@update');

$router->post('/delete', 'UserController@delete');
