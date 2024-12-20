<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Livewire\Pos;
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
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/product', [ProductController::class, 'index'])->name('product');
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
    Route::post('/update-cart', [PosController::class, 'updateCart'])->name('pos.update-cart');
    Route::get('/refresh-cart', [PosController::class, 'refreshCart'])->name('pos.refresh-cart');
    Route::get('/refresh-pos', [PosController::class, 'refreshPos'])->name('pos.refresh-pos');
    Route::post('/clear-cart', [PosController::class, 'clearCart'])->name('pos.clear-cart');
    Route::resource('pos', PosController::class);
});

// Route::prefix('pos')->middleware(['auth'])->group(function () {
//     Route::get('/', Pos::class)->name('pos');
//     Route::post('/increase-quantity/{productId}', [Pos::class, 'increaseQuantity'])->name('increaseQuantity');
// });

Route::prefix('category')->middleware(['auth'])->group(function () {
    Route::get('/list', [CategoryController::class, 'list'])->name('category.list');
    Route::resource('category', CategoryController::class);
});

Route::prefix('product')->middleware(['auth'])->group(function () {
    Route::get('/list', [ProductController::class, 'list'])->name('product.list');
    Route::resource('product', ProductController::class);
});

require __DIR__ . '/auth.php';
