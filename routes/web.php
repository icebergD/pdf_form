<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;

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


Route::get('/', [TextController::class, 'index'])->name('texts.index');
Route::post('/store', [TextController::class, 'store'])->name('texts.store');
Route::get('/export-pdf/{id}', [TextController::class, 'exportPdf'])->name('texts.exportPdf');



Route::resource('texts', TextController::class);
