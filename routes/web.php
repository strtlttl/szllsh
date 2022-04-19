<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CompaniesController@index');
Route::post('/', 'CompaniesController@index')->name('company.index');
Route::get('/companies', 'CompaniesController@create')->name('company.create');
Route::post('/companies', 'CompaniesController@store')->name('company.store');
Route::get('/companies/{company}', 'CompaniesController@edit')->name('company.edit');
Route::post('/companies/{company}', 'CompaniesController@update')->name('company.update');
Route::delete('/companies/{company}', 'CompaniesController@destroy')->name('company.destroy');