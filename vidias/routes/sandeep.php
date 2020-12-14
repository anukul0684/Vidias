<?php 

use Illuminate\Support\Facades\Route;

Route::get('/category/brand/{name}', 'LaptopsController@brand_category');

Route::get('/category/processor/{name}', 'LaptopsController@processor_category');

Route::get('/category/graphics_card/{name}', 'LaptopsController@graphics_card_category');

Route::get('/category/ram/{name}', 'LaptopsController@ram_category');

Route::get('/faq', function () {
    return view('faq');
});

// Route::get('/', function () {
//     // return view('vidiahome');
    
// });

// Route::get('store', 'LogsController@store');

// Route::get();

/**
 * Route for admin middleware
 */
Route::middleware(['admin'])->group(function(){

    /**
     * Route to view admin index
     */
    Route::get('/admin', 'Admin\AdminController@dashboard');
    Route::get('/admin/images', 'Admin\AdminImagesController@index');
    Route::get('/admin/images/create', 'Admin\AdminImagesController@create');
    Route::post('/admin/images/create', 'Admin\AdminImagesController@store');
    Route::get('/admin/images/edit/{id}', 'Admin\AdminImagesController@edit');
    Route::put('/admin/images/edit/{id}', 'Admin\AdminImagesController@update');
    
});