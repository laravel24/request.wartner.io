<?php

Route::get('/', 'RequestController@getRequest');

Route::group(['prefix' => 'request'], function($router) {
    $router->get('/', 'RequestController@getRequest');
    $router->post('/', 'RequestController@postRequest');
    $router->put('/', 'RequestController@putRequest');
    $router->patch('/', 'RequestController@patchRequest');
    $router->delete('/', 'RequestController@deleteRequest');

    $router->get('get', 'RequestController@getRequest');
    $router->post('post', 'RequestController@postRequest');
    $router->put('put', 'RequestController@putRequest');
    $router->patch('patch', 'RequestController@patchRequest');
    $router->delete('delete', 'RequestController@deleteRequest');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
