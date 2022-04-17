<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home.index');
Route::post('/', [MainController::class, 'submit'])->name('contact.submit');

Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
    return view('admin.index');
})->name('dashboard');
