<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApartmentController;

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
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/adminDash', function () {
    return view('adminDash');
})->name('adminDash');
// Route::get('/apartmentsList', function () {
//     return view('apartmentsList');
// })->name('apartmentsList');
Route::get('/apartmentDetails', function () {
    return view('apartmentDetails');
})->name('apartmentDetails');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/myApartment', function () {
    return view('myApartment');
})->name('myApartment');


Route::post('/register', [AuthController::class , 'register'])->name('regi');
Route::post('/login', [AuthController::class , 'login'])->name('logi');
Route::get('/index', [AuthController::class , 'get'])->name('index');
Route::post('/index', [ApartmentController::class , 'store'])->name('aprtmentStore');
Route::get('/apartmentsList', [ApartmentController::class , 'displayAprtment'])->name('apartmentsListdisplay');
