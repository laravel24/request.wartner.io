<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'request'], function($router) {
    $router->get('get', 'RequestController@getRequest');
    $router->post('post', 'RequestController@postRequest');
    $router->put('put', 'RequestController@putRequest');
    $router->patch('patch', 'RequestController@patchRequest');
    $router->delete('delete', 'RequestController@deleteRequest');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
