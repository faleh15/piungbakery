<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Hash;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //
        $data =[ 
                'title' => 'Manajemen Banner',
                'banner' => Banner::get(),
                'content' => 'admin/banner/index'
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
            'title' => 'Tambah Banner',
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $data = $request->validate(
        [
        'headline' => 'required',
        'desc' => 'required',
        'gambar' => 'required',
    ]);

    $data['urutan'] = 0;

    // Upload gambar
    if ($request->hasFile('gambar')) {
    $gambar = $request->file('gambar');
    $file_name = time() . '-' . $gambar->getClientOriginalName();

    $storage = 'uploads/banners/';

    // Pindahkan file
    $gambar->move($storage, $file_name);
    $data['gambar'] = $storage . $file_name; // Simpan path relatif ke database
} else {
    $data['gambar'] = null;
}


    Banner::create($data);
    return redirect('/admin/banner')->with('success', 'Banner berhasil ditambahkan!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit Banner',
            'banner' => Banner::find($id),
            'content' => 'admin/banner/add',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $banner = Banner::findOrFail($id); // Pastikan ID valid

    // Validasi input
    $data = $request->validate([
        'headline' => 'required',
        'desc' => 'required',
        'gambar' => 'nullable', // Gambar opsional
    ]);

    // Update urutan
    $data['urutan'] = $banner->urutan;

    // Upload gambar baru jika ada
    if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');

                if($banner->gambar != null){
                unlink($banner->gambar);
                }

            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/produk/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
            }else{
            $data['gambar'] = $banner->gambar;
            }

        $banner->update($data);

    return redirect('/admin/banner')->with('success', 'Banner berhasil diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $banner = Banner::find($id);
        $banner->delete();
        return redirect('/admin/banner');
    }
}
