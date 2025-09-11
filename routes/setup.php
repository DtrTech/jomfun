<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('/setup')->as('setup.')->middleware(['auth'])->group(function() {
    Route::get('/index', 'SetupController@index')->name('index');
    Route::get('/create', 'SetupController@create')->name('create');
    Route::post('/store', 'SetupController@store')->name('store');
    Route::get('/edit/{setup}', 'SetupController@edit')->name('edit');
    Route::post('/update/{setup}', 'SetupController@update')->name('update');
    Route::get('/destroy/{setup}', 'SetupController@destroy')->name('destroy');
});
