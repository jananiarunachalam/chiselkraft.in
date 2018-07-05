<?php

Route::get('/', 'RouteController@index');
Route::get('/bootcamp', 'RouteController@bootcamp')->name('bootcamp');
