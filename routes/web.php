<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Landing Welcome Screen (Root URL: portfolio.test /)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// 2. Main Portfolio Interactive Page (portfolio.test/portfolio)
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

// Optional alias for /welcome
Route::get('/welcome', function () {
    return view('welcome');
});



