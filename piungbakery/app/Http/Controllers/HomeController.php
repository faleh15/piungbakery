<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Catalog;
use App\Models\Blog;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $data = [
        'about' => About::first(),
        'catalog' => Catalog::limit(4)->get(),
        'blog' => Blog::limit(4)->get(),
        'banner' => Banner::get(),
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
    }

    function about()
    {
        $data = [
        'about' => About::first(),
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
    }

    function catalog()
    {
        $data = [
        'catalog' => Catalog::get(),
        'content' => 'home/catalog/index'
    ];
    return view('home.layouts.wrapper', $data);
    }
}
