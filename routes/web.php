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

// Google Search Console Verification File
Route::get('/google155fd4283c25dd50.html', function () {
    return response("google-site-verification: google155fd4283c25dd50.html", 200)
        ->header('Content-Type', 'text/html; charset=UTF-8');
});

// XML Sitemap
Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
    return abort(404);
});

// Temporary Typography Sandbox Route (Isolated Test Page)
Route::get('/type-test', function () {
    return view('type-test');
})->name('type-test');




