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
    $data = $request->validate([
        'headline' => 'required',
        'desc' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahkan validasi gambar
    ]);

    $data['urutan'] = 0;

    // Upload gambar
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();
        $file_path = $gambar->storeAs('uploads/banners', $file_name, 'public'); // Simpan dengan Storage Laravel
        $data['gambar'] = $file_path; // Simpan path ke database
    }

    // Simpan data ke database
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
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar opsional
    ]);

    // Update urutan
    $data['urutan'] = $banner->urutan;

    // Upload gambar baru jika ada
    if ($request->hasFile('gambar')) {
        // Hapus file lama jika ada
        if ($banner->gambar && file_exists(public_path($banner->gambar))) {
            unlink(public_path($banner->gambar)); // Hapus gambar lama dari direktori public
        }

        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();
        $file_path = $gambar->storeAs('uploads/banners', $file_name, 'public'); // Simpan gambar baru

        $data['gambar'] = 'storage/' . $file_path; // Menyimpan path relatif
    } else {
        // Jika gambar tidak diubah, gunakan gambar lama
        $data['gambar'] = $banner->gambar;
    }

    // Update data
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
