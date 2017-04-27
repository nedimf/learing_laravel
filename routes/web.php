<?php

Route::get('/', 'TestController@index');
Route::get('/tito', 'TestController@getTito');
Route::get('/clanak/{id}', 'TestController@getArticle');


//Coutries
Route::get('/countries', 'CountryController@index');
Route::get('country/new', 'CountryController@create');
Route::post('country/new', 'CountryController@store');
Route::get('country/edit/{id}', 'CountryController@edit');
Route::post('country/edit/{id}', 'CountryController@update');
Route::get('country/delete/{id}', 'CountryController@destroy');
Route::get('country/{id}', 'CountryController@show');


//Cities
Route::get('cities', 'CitiesController@index');
Route::get('city/new', 'CitiesController@create');
Route::post('city/new', 'CitiesController@store');
Route::get('city/edit/{id}', 'CitiesController@edit');
Route::post('city/edit/{id}', 'CitiesController@update');
Route::get('city/delete/{id}', 'CitiesController@destroy');
Route::get('city/{id}', 'CitiesController@show');

