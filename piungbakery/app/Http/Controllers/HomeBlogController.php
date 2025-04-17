<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    /**
     * Tampilkan daftar blog di halaman utama.
     */
    public function index()
    {
        $data = [
            'blog' => Blog::get(), // Blog terbaru dengan pagination
            'content' => 'home/blog/index',
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function show($id)
    {
        $data = [
            'blog' => Blog::find($id),
            'content' => 'home/blog/show'
        ];
        return view('home.layouts.wrapper', $data);
    }
}