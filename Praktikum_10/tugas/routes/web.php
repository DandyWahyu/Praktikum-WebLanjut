<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::resource('mahasiswas', MahasiswaController::class);
Route::get('mahasiswas/{Nim}/nilai', [MahasiswaController::class, 'detailValue'])->name('mahasiswas.nilai');
Route::get('mahasiswas/{Nim}/print_value', [MahasiswaController::class, 'printValue'])->name('mahasiswas.printvalue');
