<?php
Route::get('/', 'MainController@index');
Route::post('/ajax', 'MainController@store');
Route::any('{all}', 'MainController@redirect');