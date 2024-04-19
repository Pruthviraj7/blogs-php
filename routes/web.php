<?php

use App\Http\Controllers\BlogController;
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
// Route::get('blogs/trash/{id}', [BlogController::class, 'trash'])->name('blogs.trash');
Route::delete('blogs/trash/{id}', [BlogController::class, 'trash'])->name('blogs.trash');
Route::get('blogs/trashed/', [BlogController::class, 'trashed'])->name('blogss.trashed');
Route::get('blogs/restore/{id}', [BlogController::class, 'trash'])->name('blogs.restore');

Route::resource('blogs', BlogController::class);
