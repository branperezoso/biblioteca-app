<?php

use App\Http\Livewire\LoanComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Books;
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

Route::get('prestamos', LoanComponent::class)->name('prestamos')->middleware('auth');

Route::get('books', Books::class)->name('books.index')->middleware('auth');