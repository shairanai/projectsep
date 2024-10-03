<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/', [UserController::class, 'home']);
Route::get('/', [UserController::class, 'login']);

Route::post('/auth', [UserController::class, 'auth']);
Route::middleware(['App\Http\Middleware\StatusLogin::class'])->group(function () {

    Route::get('/index', [ArtikelController::class, 'show']);
    Route::post('/search', [ArtikelController::class, 'search']);
    Route::get('/artikel/create', [ArtikelController::class, 'create']);
    Route::post('/artikel/create', [ArtikelController::class, 'add']);
    Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit']);
    Route::post('/artikel/edit/{id}', [ArtikelController::class, 'update']);
    Route::get('/artikel/delete/{id}', [ArtikelController::class, 'delete']);

});
    Route::get('/logout', [UserController::class, 'logout']);


// Route::get('/logout', [UserController::class, 'logout']);

Route::get('/home', [UserController::class, 'home']);
Route::get('detailcerita/{id}', [ArtikelController::class, 'detail']);

Route::get('/detailcerita', [UserController::class, 'detailcerita']);
Route::get('/detailcerita2', [UserController::class, 'detailcerita2']);
Route::get('/detailcerita3', [UserController::class, 'detailcerita3']);
Route::get('/detailcerita4', [UserController::class, 'detailcerita4']);
Route::get('/detailcerita5', [UserController::class, 'detailcerita5']);
Route::get('/detailcerita6', [UserController::class, 'detailcerita6']);
Route::get('/fantasi', [UserController::class, 'fantasi']);
Route::get('/horor', [UserController::class, 'horor']);
Route::get('/romansa', [UserController::class, 'romansa']);
Route::get('/tentangkami', [UserController::class, 'tentangkami']);
Route::get('/dashboard', [ArtikelController::class, 'dashboard']);

