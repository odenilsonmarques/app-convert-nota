<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Notaxml\NotaxmlController;

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


Route::get('/notasxml',[NotaxmlController::class, 'create'])->name('notasxml.create');

Route::post('/notasxml',[NotaxmlController::class, 'store'])->name('notasxml.store');

Route::get('/notasxml/show/{id}',[NotaxmlController::class, 'show'])->name('notasxml.show');
