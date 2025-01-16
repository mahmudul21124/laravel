<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



// User type:user
Route::middleware(['auth', 'user-access:user'])->prefix('user')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// User type:admin
Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'adminHome'])->name('adminhome');
});

// User type:manager
Route::middleware(['auth', 'user-access:manager'])->prefix('manager')->group(function () {
    Route::get('/home', [HomeController::class, 'managerHome'])->name('managerhome');
});
