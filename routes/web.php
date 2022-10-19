<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

 

Route::get('/', function () {
    return view('first');
});
Route::middleware(['auth'])->group(function () {    
    Route::get('/home', [MainController::class, 'index']);    
});
    Route::get('/screener', function () {
        return view('first',['title' => 'screener']);
    })->name('screener');
    Route::get('/gurutracker', function () {
        return view('first',['title' => 'gurutracker']);
    })->name('gurutracker');
    Route::get('/articles', function () {
        return view('first',['title' => 'articles']);
    })->name('articles');
    Route::get('/about', function () {
        return view('first',['title' => 'about']);
    })->name('about');
    Route::get('/froum', function () {
        return view('first',['title' => 'froum']);
    })->name('froum');
    Route::get('/pricing', function () {
        return view('first',['title' => 'pricing']);
    })->name('pricing');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
