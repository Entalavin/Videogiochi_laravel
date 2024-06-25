<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideogameController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
     return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/videogames', [VideogameController::class, 'index'])->name('videogames');

Route::get('/videogames/{videogame}', [VideogameController::class, 'show'])->name('show');

// route admin

Route::get('/dashboard/videogames', [VideogameController::class, 'index_admin'])->name('admin.videogames.index');
//create
Route::get('/dashboard/videogames/create_videogame',[VideogameController::class, 'create'])->name('admin.videogames.create');

Route::post('/dashboard/videogames',[VideogameController::class, 'store'])->name('admin.videogames.store');

//edit

Route::get('/dashboard/videogames/edit_videogame/{videogame}',[VideogameController::class, 'edit'])->name('admin.videogames.edit');
Route::put('/dashboard/videogames/{videogame}',[VideogameController::class, 'update'])->name('admin.videogames.update');