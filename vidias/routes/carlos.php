<?php 

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::middleware(['admin'])->group(function(){
    Route::get('/admin/provinces', 'Admin\AdminProvincesController@index');
    
    Route::get('/admin/provinces/create', 'Admin\AdminProvincesController@create');

    Route::get('/admin/provinces/edit/{id}', 'Admin\AdminProvincesController@edit');

    Route::post('/admin/provinces/create', 'Admin\AdminProvincesController@store');

    Route::put('/admin/provinces/edit/{id}', 'Admin\AdminProvincesController@update');
});