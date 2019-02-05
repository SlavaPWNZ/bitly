<?php
Route::get('/', 'MainController@index');
Route::post('/ajax', 'MainController@store');
Route::any('{link}', 'MainController@redirect');