<?php

use Illuminate\Support\Facades\Route;

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

//* nome che compare dopo la porta del server (http://127.0.0.1:8000/)
//*         ↓
Route::get('/', function () {
    return view('home');
  })->name('home');

//* nome che compare dopo la porta del server (http://127.0.0.1:8000/)
//*            ↓
Route::get('/about-us', function () {
  return view('about');
})->name('about');
