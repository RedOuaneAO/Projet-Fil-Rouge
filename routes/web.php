<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
})->name('Home');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/adminDash', function () {
    return view('adminDash');
})->name('adminDash');
Route::get('/apartmentsList', function () {
    return view('apartmentsList');
})->name('apartmentsList');
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/apartmentDetails', function () {
    return view('apartmentDetails');
})->name('apartmentDetails');


Route::post('/register', [AuthController::class , 'register'])->name('regi');
