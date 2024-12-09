<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminCatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //
        $data = [
                'title' => 'Manajemen Catalog',
                'catalog' => Catalog::get(),
                'content' => 'admin/catalog/index'
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
            'title' => 'Tambah Catalog',
            'content' => 'admin/catalog/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'gambar' => 'required', // Tambahkan validasi gambar
            ]
            );

        $data['password'] = Hash::make($data['password']);

        if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();
        $file_path = $gambar->storeAs('uploads/banners', $file_name, 'public'); // Simpan dengan Storage Laravel
        $data['gambar'] = $file_path; // Simpan path ke database
    }


            Catalog::create($data);
        return redirect('/admin/catalog');
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
            'title' => 'Edit Catalog',
            'catalog' => Catalog::find($id),
            'content' => 'admin/catalog/add',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                // 'password' => 'required|min:8',
                're_password' => 'same:password',
            ]
            );
        $catalog = Catalog::find($id);
        if ($request->password){
            $data['password'] = Hash::make($data['password']);
        }else{
            $data['password'] = $catalog->password;
        }

        $catalog->update($data);
        return redirect('/admin/catalog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $catalog = Catalog::find($id);
        $catalog->delete();
        return redirect('/admin/catalog');
    }
}
