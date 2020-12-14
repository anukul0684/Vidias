<?php

/** Route to go to Laptops list view page using GET method */
Route::get('/laptops', 'LaptopsController@index');

/** Route to go to Laptop detail view page using GET method */

// Route::get('/laptops/{laptop:id}','LaptopsController@show');

Route::get('/laptops/{brand_name}/{laptop:id}','LaptopsController@show');


/** Route to go to Cart page using GET method */
Route::get('/cart', function () {
    return view('cart');
});

Route::post('/cart', 'LaptopsController@addToCart');

Route::patch('update-cart/{id}', 'LaptopsController@update');

Route::delete('remove-from-cart/{id}', 'LaptopsController@remove');

/** Route to go to Profile page */
Route::get('/profile', 'UsersController@index');

/** Route to go to update Profile page */
Route::put('/profile', 'UsersController@update');


/** Route to checkout page for logged in user */
Route::get('/checkout', 'CheckoutController@index');

/** Route to checkout page for entering payment details */
Route::patch('/checkout/payment', 'CheckoutController@selectAddress');

/** Route to checkout page for entering payment details */
Route::post('/checkout/payment', 'CheckoutController@addAddress');


/** Route to go to payment page */
Route::get('/payment','TransactionsController@index');

/** Route to payment page for processing payment */
Route::post('/payment','TransactionsController@processPayment');

/** Route to go to invoice page */
Route::get('/invoice','InvoiceController@index');

/**
 * Route for admin middleware
 */
Route::middleware(['admin'])->group(function(){

    /** Route to go to Admin/RAM index view page */    
    Route::get('/admin/rams', 'Admin\AdminRamController@index');

    /** Route to go to Admin/RAM create page */
    Route::get('/admin/rams/create', 'Admin\AdminRamController@create');

    /** Route to do add record in RAMs table */
    Route::post('/admin/rams/create', 'Admin\AdminRamController@store');

    /** Route to go to Admin/RAM edit page */
    Route::get('/admin/rams/edit/{id}', 'Admin\AdminRamController@edit');

    /** Route to do update record in RAMs table */
    Route::put('/admin/rams/edit/{id}', 'Admin\AdminRamController@update');

    /** Route to go to Admin/RAM index view page */    
    Route::get('/admin/processors', 'Admin\AdminProcessorsController@index');

    /** Route to go to Admin/Processor create page */
    Route::get('/admin/processors/create', 'Admin\AdminProcessorsController@create');

    /** Route to do add record in Processors table */
    Route::post('/admin/processors/create', 'Admin\AdminProcessorsController@store');

    /** Route to go to Admin/Processor edit page */
    Route::get('/admin/processors/edit/{id}', 'Admin\AdminProcessorsController@edit');

    /** Route to do update record in Processors table */
    Route::put('/admin/processors/edit/{id}', 'Admin\AdminProcessorsController@update');

    
});

/** Route to go to Order page */
Route::get('/orders', 'OrdersController@index');

/** Route to go to Order details page */
Route::get('/orders/{id}', 'OrdersController@show');

/** Route to go to Terms of Use page */
Route::get('/termsofuse', 'TermsOfUseController@index');

/** Route to go to Privacy Policy page */
Route::get('/privacy', 'PrivacyPolicyController@index');