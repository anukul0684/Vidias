<?php

/** Route to go to Addresses list view page using GET method */
Route::get('/address', 'AddressesController@index');

/** Route to delete data from a model using PATCH method */
Route::patch('/{slug}/delete/{id}', 'DeleteController@destroy');

/** Route to delete data from a model using PATCH method */
Route::patch('/admin/{slug}/delete/{id}', 'DeleteController@destroy');

/** Route to delete data from a order detail using PATCH method */
Route::patch('/admin/orders/{slug}/delete/{id}', 'DeleteController@destroy');

/** Route to create a address */
Route::get('/address/create', 'AddressesController@create');
Route::post('/address/create', 'AddressesController@store');

/** Route to edit a address */
Route::get('/address/edit/{id}', 'AddressesController@edit');
Route::put('/address/edit/{id}', 'AddressesController@update');

/**
 * Route for admin middleware
 */
Route::middleware(['admin'])->group(function(){

    /** Route to go to Admin/Address index view page */    
    Route::get('/admin/addresses', 'Admin\AdminAddressController@index');

    /** Route to go to Admin/Address create page */
    Route::get('/admin/addresses/create', 'Admin\AdminAddressController@create');

    /** Route to do add record in Addresses table */
    Route::post('/admin/addresses/create', 'Admin\AdminAddressController@store');

    /** Route to go to Admin/Address edit page */
    Route::get('/admin/addresses/edit/{id}', 'Admin\AdminAddressController@edit');

    /** Route to do update record in Addresses table */
    Route::put('/admin/addresses/edit/{id}', 'Admin\AdminAddressController@update');

});