<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminCatalogController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
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

Route::get('/login', function () {
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});

// ADMIN PAGE

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'content' => '/admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/posts/blog', AdminBlogController::class);
    Route::resource('/posts/kategori', AdminKategoriController::class);
    Route::resource('/pesan', AdminPesanController::class);
    Route::resource('/catalog', AdminCatalogController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
});