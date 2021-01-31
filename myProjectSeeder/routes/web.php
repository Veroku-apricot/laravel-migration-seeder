<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TrademarkController@index') -> name('trademark-index');
Route::get('/trademark/{id}', 'TrademarkController@show' ) -> name('trademark-show');


Route::get('/home2', 'EmployeeController@index') -> name('employee-index');
Route::get('/employee/{id}', 'EmployeeController@show' ) -> name('employee-show');


Route::get('/home3', 'LocationController@index') -> name('location-index');
Route::get('/location/{id}', 'LocationController@show' ) -> name('location-show');
