<?php

use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     //return view('welcome');
//     return view('login');
// });

Route::get ('/', [AuthController::class, 'login']);
Route::post ('login', [AuthController::class, 'AuthLogin']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/admin/list', function () {
    return view('admin.admin.list');
});
