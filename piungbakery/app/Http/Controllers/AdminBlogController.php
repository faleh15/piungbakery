<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //
        $data =[ 
                'title' => 'Manajemen blog',
                'blog' => blog::get(),
                'content' => 'admin/blog/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah blog',
            'content' => 'admin/blog/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $data = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'cover' => 'required', // Tambahkan validasi cover
    ]);

    // Upload cover
    if ($request->hasFile('cover')) {
        $cover = $request->file('cover');
        $file_name = time() . '-' . $cover->getClientOriginalName();
        $file_path = $cover->storeAs('uploads/blogs', $file_name, 'public'); // Simpan dengan Storage Laravel
        $data['cover'] = $file_path; // Simpan path ke database
    }

    // Simpan data ke database
    blog::create($data);

    return redirect('/admin/posts/blog')->with('success', 'blog berhasil ditambahkan!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit blog',
            'blog' => blog::find($id),
            'content' => 'admin/blog/show',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit blog',
            'blog' => blog::find($id),
            'content' => 'admin/blog/add',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $blog = blog::findOrFail($id); // Pastikan ID valid

    // Validasi input
    $data = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'cover' => 'required',
    ]);

    // Upload cover baru jika ada
    if ($request->hasFile('cover')) {

        if ($blog->cover && file_exists(public_path($blog->cover))) {
            unlink(public_path($blog->cover)); // Hapus cover lama dari direktori public
        }

        $cover = $request->file('cover');
        $file_name = time() . '-' . $cover->getClientOriginalName();
        $file_path = $cover->storeAs('uploads/blogs', $file_name, 'public'); // Simpan cover baru

        $data['cover'] = 'storage/' . $file_path; // Menyimpan path relatif
    } else {
        // Jika cover tidak diubah, gunakan cover lama
        $data['cover'] = $blog->cover;
    }

    // Update data
    $blog->update($data);

    return redirect('/admin/posts/blog')->with('success', 'blog berhasil diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = blog::find($id);
        $blog->delete();
        return redirect('/admin/posts/blog');
    }
}
