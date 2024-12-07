<?php

use App\Http\Controllers\AdminUserController;
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
    Route::get('/user', function () {
        $data = [
            'content' => '/admin/user/index'
        ];

        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/user', AdminUserController::class);
});

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'content' => '/admin/dashboard/index'
        ];

        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/user', AdminUserController::class);
});