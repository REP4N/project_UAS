<?php

use App\Http\Controllers\ProductController;
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
    return view('dashboard.index');
});


Route::get('/products/export', [ProductController::class, 'export'])->name('products.export');
Route::get('/products/import', [ProductController::class, 'import'])->name('products.import');
Route::post('/products/import', [ProductController::class, 'handleImport'])->name('products.handleImport');
Route::resource('/products', ProductController::class);