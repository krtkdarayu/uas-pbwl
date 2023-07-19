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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artist', [App\Http\Controllers\artistController::class, 'index']);
Route::get('/artist/create', [App\Http\Controllers\artistController::class, 'create']);
Route::post('/artist', [App\Http\Controllers\artistController::class, 'store']);
Route::get('/artist/{id}/edit', [App\Http\Controllers\artistController::class, 'edit']);
Route::patch('/artist/{id}', [App\Http\Controllers\artistController::class, 'update']);
Route::delete('/artist/{id}', [App\Http\Controllers\artistController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/album', [App\Http\Controllers\albumController::class, 'index']);
Route::get('/album/create', [App\Http\Controllers\albumController::class, 'create']);
Route::post('/album', [App\Http\Controllers\albumController::class, 'store']);
Route::get('/album/{id}/edit', [App\Http\Controllers\albumController::class, 'edit']);
Route::patch('/album/{id}', [App\Http\Controllers\albumController::class, 'update']);
Route::delete('/album/{id}', [App\Http\Controllers\albumController::class, 'destroy']);

Route::get('/played', [App\Http\Controllers\playedController::class, 'index']);
Route::get('/played/create', [App\Http\Controllers\playedController::class, 'create']);
Route::post('/played', [App\Http\Controllers\playedController::class, 'store']);
Route::get('/played/{id}/edit', [App\Http\Controllers\playedController::class, 'edit']);
Route::patch('/played/{id}', [App\Http\Controllers\playedController::class, 'update']);
Route::delete('/played/{id}', [App\Http\Controllers\playedController::class, 'destroy']);

Route::get('/track', [App\Http\Controllers\trackController::class, 'index']);
Route::get('/track/create', [App\Http\Controllers\trackController::class, 'create']);
Route::post('/track', [App\Http\Controllers\trackController::class, 'store']);
Route::get('/track/{id}/edit', [App\Http\Controllers\trackController::class, 'edit']);
Route::patch('/track/{id}', [App\Http\Controllers\trackController::class, 'update']);
Route::delete('/track/{id}', [App\Http\Controllers\trackController::class, 'destroy']);