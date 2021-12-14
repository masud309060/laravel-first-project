<?php

use App\Http\Controllers\ProductController;
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


// Route that sends back a view
Route::get('/', function () {
    return view('welcome');
});

// Route that sends back a string
Route::get('/string', function () {
    return "Welcome to learn laravel framework";
});

// Route that sends back a - Array
Route::get('/array', function () {
    return ["php", "laravel", "mySql"];
});

// Route that sends back a - Array json
Route::get('/json', function () {
    return response()->json([
        "name"=>"laravel course",
        "instructor"=>"dary",
    ]);
});

// Route that sends back a - function
Route::get('/function', function () {
    return redirect('/string');
});

// Route that sends back a - home view
Route::get('/home', function () {
    return view('home');
});


/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
*/
// Laravel 8 (New)
Route::get('products', [ProductController::class, 'index']);
Route::get('/products/home', [ProductController::class, 'home']);












//
//// Laravel 8 (New Also)
//Route::get('products/index', 'App\Http\Controllers\ProductController@index');
//
//// Before Laravel 8 (Also New)
//Route::get('products/about',  'ProductController@about');
