<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //
        $data = [
                'title' => 'Manajemen About',
                'about' => About::first(),
                'content' => 'admin/about/index'
                ];
        return view('admin.layouts.wrapper', $data);
    }
    
    public function update(Request $request)
{
    $about = About::first();

    $data = $request->validate([
        'name' => 'required',
        'desc' => 'required',
        'cover' => 'nullable',
    ]);

    if ($request->hasFile('cover')) {
        $cover = $request->file('cover');

        // Hapus file lama jika ada
        if ($about->cover && file_exists(public_path($about->cover))) {
            unlink(public_path($about->cover));
        }

        $file_name = time() . '-' . $cover->getClientOriginalName();
        $storage = 'uploads/images/';
        $cover->move(public_path($storage), $file_name);

        $data['cover'] = $storage . $file_name; // Simpan path relatif
    } else {
        $data['cover'] = $about->cover; // Pertahankan gambar lama
    }

    $about->update($data);

    return redirect('/admin/about')->with('success', 'Data berhasil diperbarui!');
}

}
