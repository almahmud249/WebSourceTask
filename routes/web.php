<?php


use App\Http\Controllers\BulkImportController;
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

Route::get('/', [BulkImportController::class, 'home'])->name('dashboard');
Route::get('city', [BulkImportController::class, 'city'])->name('city');
