<?php

Route::get('/', 'TestController@index');
Route::get('/tito', 'TestController@getTito');
Route::get('/clanak/{id}', 'TestController@getArticle');

//Cities
Route::get('cities', 'CitiesController@index');
Route::get('city/{id}', 'CitiesController@show');
