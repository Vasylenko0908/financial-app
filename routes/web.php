<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ScreenerController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PricingController;
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

 
Route::get('/', [MainController::class, 'first']);
Route::post('/company/{name}',[MainController::class, 'index']);
Route::get('/search/{name}',[MainController::class, 'search']);
Route::middleware(['auth'])->group(function () {    
    Route::get('/home', [MainController::class, 'index']);    
});
    Route::get('/screener', [ScreenerController::class, 'index'])->name('screener');
    Route::get('/gurutracker', [GuruController::class, 'index'])->name('gurutracker');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/froum', [ForumController::class, 'index'])->name('froum');
    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    
    
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
