<?php

  Route::post('/laptops/{brand_name}/{laptop:id}','LaptopsController@store');

Route::middleware(['admin'])->group(function(){
  Route::get('/admin/brands', 'Admin\AdminBrandsController@index');
  Route::get('/admin/brands/create', 'Admin\AdminBrandsController@create');
  Route::post('/admin/brands/create', 'Admin\AdminBrandsController@store');
  Route::get('/admin/brands/edit/{id}', 'Admin\AdminBrandsController@edit');
  Route::put('/admin/brands/edit/{id}', 'Admin\AdminBrandsController@update');

  Route::get('/admin/users', 'Admin\AdminUsersController@index');
  Route::get('/admin/users/create', 'Admin\AdminUsersController@create');
  Route::post('/admin/users/create', 'Admin\AdminUsersController@store');
  Route::get('/admin/users/edit/{id}', 'Admin\AdminUsersController@edit');
  Route::put('/admin/users/edit/{id}', 'Admin\AdminUsersController@update');

  Route::get('/admin/comments', 'Admin\AdminCommentsController@index');
  Route::get('/admin/comments/create', 'Admin\AdminCommentsController@create');
  Route::post('/admin/comments/create', 'Admin\AdminCommentsController@store');
  Route::get('/admin/comments/edit/{id}', 'Admin\AdminCommentsController@edit');
  Route::put('/admin/comments/edit/{id}', 'Admin\AdminCommentsController@update');

});