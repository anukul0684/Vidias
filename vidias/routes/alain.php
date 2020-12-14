<?php

Route::get('/contact','HomeController@contact');

Route::post('/contact','HomeController@postContact');

Route::middleware(['admin'])->group(function(){
	Route::get('/admin/graphicscards/','Admin\AdminGraphicscardsController@index');
	Route::get('/admin/graphicscards/create','Admin\AdminGraphicscardsController@create');
	Route::post('/admin/graphicscards/create','Admin\AdminGraphicscardsController@store');
	Route::get('/admin/graphicscards/edit/{id}','Admin\AdminGraphicscardsController@edit');
	Route::post('/admin/graphicscards/edit/{id}','Admin\AdminGraphicscardsController@update');
});