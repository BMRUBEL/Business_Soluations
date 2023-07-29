<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/app', function () {
    return view('website');
});
Route::get('/web', function () {
    return view('website');
});
Route::get('/abouts', function () {
    return view('website');
});
Route::get('/serviceus', function () {
    return view('website');
});
Route::get('/aboutus', function () {
    return view('website');
});

// admin route
Route::get('{any}', function () {
    return view('welcome');
})->where('any','.*');
// Route::get('/login', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
