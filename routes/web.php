<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::post('/register', [AuthController::class , 'register'])->name('regi');
Route::post('/login', [AuthController::class , 'login'])->name('logi');
Route::get('/logout', [AuthController::class , 'logout'])->name('logout');
Route::put('/updateProfile/{id}',[ProfileController::class,'updateProfile']);
Route::put('/updatePassword/{id}',[ProfileController::class,'updatePassword']);
// ------apartment 
Route::get('/index', [AuthController::class , 'get'])->name('index');
Route::post('/index', [ApartmentController::class , 'store'])->name('aprtmentStore');
Route::get('/apartmentsList', [ApartmentController::class , 'displayAprtment'])->name('apartmentsListdisplay');
Route::get('/myFavorite/{id}',[ApartmentController::class , 'favoriteApart']);
Route::get('/apartmentDetails/{id}', [ApartmentController::class , 'displayAprtmentDetails'])->name('red');
Route::post('/apartmentDetails/{id}', [CommentController::class , 'addComment']);
Route::post('/deleteComment/{id}', [CommentController::class , 'deleteComment']);
Route::post('/favorite/{id}', [ApartmentController::class , 'addToFavorite']);
Route::get('/myApartment/{id}', [ApartmentController::class , 'myApartment']);
Route::get('/deleteApartment/{id}', [ApartmentController::class , 'deleteApartment']);
Route::post('/updateApartmentView/{id}', [ApartmentController::class , 'updateApartmentView']);
Route::put('/updateApartment/{id}', [ApartmentController::class , 'updateApartment'])->name('updateApart');
Route::post('/apartmentsList', [ApartmentController::class , 'filter'])->name('filter');

// ----------admindash
Route::get('/adminDash',[AdminController::class , 'getdata'])->name('adminDash');

// ----------payment

Route::get('/bookingRequest', function () {
    return redirect('bookingRequest');
})->name('bookingRequest');
Route::controller(PaymentController::class)->group(function(){
    Route::post('/bookingRequest','payment');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});