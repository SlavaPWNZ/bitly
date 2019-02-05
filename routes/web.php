<?php

Route::resource('/', 'MainController');
Route::any('{all}', 'MainController@redirect');