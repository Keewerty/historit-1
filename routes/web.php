<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Models\Asset;

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
//     return view('welcome');
// });


Route::get('/', [AssetController::class, 'table'])->name('assets.table');
Route::get('/assets/index', [AssetController::class, 'table'])->name('assets.index');
Route::post('/assets/store', [AssetController::class, 'store'])->name('assets.store');
Route::get('/assets/create', [AssetController::class, 'create'])->name('assets.create');
