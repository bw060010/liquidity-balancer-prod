<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

use App\Http\Controllers\CalculationController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CalculationController::class, 'showForm']);
Route::post('/', [CalculationController::class, 'performCalculation']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Auth::routes(['register' => false, 'reset' => false]);
//Auth::routes(['reset' => false]);
//Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/blog', [BlogController::class, 'admin_index']);
    Route::get('/admin/blog/create', [BlogController::class, 'create']);
    Route::post('/admin/blog', [BlogController::class, 'store']);
    Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit']);
    Route::post('/admin/blog/{id}', [BlogController::class, 'update']);
    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
