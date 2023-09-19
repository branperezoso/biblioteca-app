<?php

use App\Http\Livewire\LoanComponent;
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
Route::get('/books', 'BookController@index')->name('books.index');
Route::get('/books/{id}', 'BookController@show')->name('books.show');
Route::get('/books/create', 'BookController@create')->name('books.create');
Route::post('/books', 'BookController@store')->name('books.store');
Route::get('/books/{id}/edit', 'BookController@edit')->name('books.edit'); 
Route::put('/books/{id}', 'BookController@update')->name('books.update');
Route::delete('/books/{id}', 'BookController@destroy')->name('books.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('prestamos', LoanComponent::class)->name('prestamos')->middleware('auth');
