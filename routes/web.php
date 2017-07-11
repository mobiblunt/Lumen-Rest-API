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

$app->get('/', function() use ($app) {
    return "Lumen RESTful API By CoderExample (https://coderexample.com)";
});
 
 
$app->get('api/v1/book','BookController@index');
 
$app->get('api/v1/book/{id}','BookController@getbook');
 
$app->post('api/v1/book','BookController@createBook');
 
$app->put('api/v1/book/{id}','BookController@updateBook');
 
$app->delete('api/v1/book/{id}','BookController@deleteBook');
