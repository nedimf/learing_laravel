<?php

Route::get('/', 'TestController@index');
Route::get('/tito', 'TestController@getTito');
Route::get('/clanak/{id}', 'TestController@getArticle');
