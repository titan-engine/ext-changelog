<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your extension. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group([
    'prefix' => 'admin/ian/changelog',
    'middleware' => ['auth', 'permission:admin']
], function () {
    Route::get('/', 'AdminController@index')
        ->name('admin.ian.changelog');

    Route::get('/create', 'AdminController@create')
        ->name('admin.ian.changelog.create');

    Route::post('/create', 'AdminController@store')
        ->name('admin.ian.changelog.store');

    Route::get('/{changelog}', 'AdminController@edit')
        ->name('admin.ian.changelog.edit');

    Route::put('/{changelog}', 'AdminController@update')
        ->name('admin.ian.changelog.update');

    Route::delete('/{changelog}', 'AdminController@delete')
        ->name('admin.ian.changelog.delete');
});
