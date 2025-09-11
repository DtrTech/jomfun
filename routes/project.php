<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('/project')->as('project.')->middleware(['auth'])->group(function() {
    Route::get('/index', 'ProjectController@index')->name('index');
    Route::get('/create', 'ProjectController@create')->name('create');
    Route::post('/store', 'ProjectController@store')->name('store');
    Route::get('/edit/{project}', 'ProjectController@edit')->name('edit');
    Route::post('/update/{project}', 'ProjectController@update')->name('update');
    Route::get('/destroy/{project}', 'ProjectController@destroy')->name('destroy');
});
