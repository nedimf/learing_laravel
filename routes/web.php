<?php

Route::get('/', 'TestController@index');
Route::get('/tito', 'TestController@getTito');
Route::get('/clanak/{id}', 'TestController@getArticle');

//Cities
Route::get('cities', 'CitiesController@index');
Route::get('city/new', 'CitiesController@create');
Route::post('city/new', 'CitiesController@store');
Route::get('city/edit/{id}', 'CitiesController@edit');
Route::post('city/edit/{id}', 'CitiesController@update');
Route::get('city/delete/{id}', 'CitiesController@destroy');
Route::get('city/{id}', 'CitiesController@show');
