<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/clients', [ClientsController::class, 'index'])->name('clients');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::get('/user', [UserController::class, 'index'])->name('users');
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
    Route::get('/pos', [PosController::class, 'index'])->name('pos');
});

Route::prefix('users')->middleware(['auth'])->group(function () {
    Route::get('/list', [UserController::class, 'list'])->name('users.list');
    Route::resource('users', UserController::class);
});

Route::prefix('roles')->middleware(['auth'])->group(function () {
    Route::get('/list', [RoleController::class, 'list'])->name('roles.list');
    Route::resource('roles', RoleController::class);
});

Route::prefix('permission')->middleware(['auth'])->group(function () {
    Route::get('/list', [PermissionController::class, 'list'])->name('permission.list');
    Route::resource('permission', PermissionController::class);
});

Route::prefix('clients')->middleware(['auth'])->group(function () {
    Route::get('/list', [ClientsController::class, 'list'])->name('clients.list');
    Route::resource('clients', ClientsController::class);
});

Route::prefix('pos')->middleware(['auth'])->group(function () {
    Route::get('/list', [PosController::class, 'list'])->name('pos.list');
    Route::resource('pos', PosController::class);
});

require __DIR__ . '/auth.php';
