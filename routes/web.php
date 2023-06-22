<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowbooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookDetailsController;
use App\Http\Controllers\UpdateBookController;
use App\Http\Controllers\DeleteBookController;
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
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route for Profile
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
//Route for Update Profile
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');

//Request Book Data on Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Controlling Status Pages
Route::get('/allBooks', [ShowBooksController::class, 'allBooks'])->middleware('auth');
Route::get('/planToRead', [ShowBooksController::class, 'planToRead'])->middleware('auth');
Route::get('/completed', [ShowBooksController::class, 'completed'])->middleware('auth');
Route::get('/onGoing', [ShowBooksController::class, 'onGoing'])->middleware('auth');
Route::get('/onHold', [ShowBooksController::class, 'onHold'])->middleware('auth');
Route::get('/dropped', [ShowBooksController::class, 'dropped'])->middleware('auth');

Route::get('/addBook', [AddBookController::class, 'index'])->middleware('auth');

//Route For Adding Book
Route::resource('addBook', 'App\Http\Controllers\AddBookController');

//Route for Update Book
Route::post('updateBook/{id}', [UpdateBookController::class, 'update']);

//Route for Delete Book
Route::get('deleteBook/{id}', [DeleteBookController::class, 'delete']);

//Route for Edit and Show Books
Route::get('/bookDetails/{id}', [BookDetailsController::class, 'details'])->middleware('auth');
