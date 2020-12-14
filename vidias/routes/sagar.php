<?php

Route::get('/laptops/{brand_name}','BrandsController@brand_laptop');
Route::get('/laptops/filter/ram', 'FilterController@ram_filter');
Route::get('/laptops/filter/screensize','FilterController@screen_filter');
Route::get('/laptops/filter/processor','FilterController@processor_filter');
Route::get('/laptops/filter/graphicscard','FilterController@graphics_filter');
Route::get('/laptops/filter/price','FilterController@price_filter');

Route::middleware(['admin'])->group(function(){
    Route::get('/admin/laptops','Admin\AdminLaptopController@index');
    Route::get('/admin/laptops/create','Admin\AdminLaptopController@create');
    Route::post('/admin/laptops/create', 'Admin\AdminLaptopController@store');
    Route::get('/admin/laptops/edit/{id}','Admin\AdminLaptopController@edit');
    Route::put('/admin/laptops/edit/{id}','Admin\AdminLaptopController@update');
    
    Route::get('/admin/orders','Admin\AdminOrderController@index');
    Route::get('/admin/orders/edit/{id}','Admin\AdminOrderController@edit');
    Route::put('/admin/orders/edit/{id}','Admin\AdminOrderController@update');
    
    Route::get('/admin/orders/orderdetails/{id}','Admin\AdminOrderDetailController@index');
    Route::get('/admin/orders/orderdetails/edit/{id}','Admin\AdminOrderDetailController@edit');
    Route::put('/admin/orders/orderdetails/edit/{id}','Admin\AdminOrderDetailController@update');
    
});