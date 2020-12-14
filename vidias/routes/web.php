<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    \LogActivity::addToLog();
    return view('vidiahome');
});

//Because this refers to the homecontroller i had to require it first. Try not to change this
require __DIR__ . '/chinedu.php';

require __DIR__ . '/sagar.php';

require __DIR__ . '/anu.php';

require __DIR__ . '/tristan.php';

require __DIR__ . '/alain.php';

require __DIR__ . '/carlos.php';

require __DIR__ . '/sandeep.php';



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
