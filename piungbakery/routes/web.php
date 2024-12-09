<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminCatalogController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/about', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contact', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/shop', function () {
    $data = [
        'content' => 'home/shop/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/blog', function () {
    $data = [
        'content' => 'home/blog/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/catalog', function () {
    $data = [
        'content' => 'home/catalog/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

// ADMIN PAGE

Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    Route::get('/about', [AdminAboutController::class, 'index']);
    Route::put('/about/update', [AdminAboutController::class, 'update']);

    Route::resource('/catalog', AdminCatalogController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
});