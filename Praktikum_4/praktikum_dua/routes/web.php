<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/features', [PagesController::class, 'features']);
Route::get('/contact', [PagesController::class, 'contact']);
