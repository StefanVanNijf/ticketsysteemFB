<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get("/",[PagesController::class, "viewHome"])->name('home');

Route::get("/home",[PagesController::class, "viewHome"])->name
('home');
Route::get('/contact', [PagesController::class, "viewContact"])->name
('contact');
Route::get('/about', [PagesController::class, "viewAbout"])->name
('about');


Route::get('/admin/create-events',[\App\Http\Controllers\EventsController::class, 'createEvent'])->name
('create-events')->middleware('auth');

Route::get('/admin/create-ticket',[\App\Http\Controllers\EventsController::class, 'createTicket'])->name
('create-ticket')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
