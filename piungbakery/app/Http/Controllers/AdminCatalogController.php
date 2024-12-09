<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
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
                'produk' => 'required',
                'desc' => 'required',
                // 'urutan' => 'required',
                'gambar' => 'required',
            ]
            );
        $data['urutan'] = 0;

            if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/produk/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
            }else{
            $data['gambar'] = null;
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
        $catalog = Catalog::find($id);
         $data = $request->validate(
            [
                'produk' => 'required',
                'desc' => 'required',
                // 'urutan' => 'required',
                // 'gambar' => 'required',
            ]
            );
        $data['urutan'] = 0;

            if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');

                if($catalog->gambar != null){
                unlink($catalog->gambar);
                }

            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/produk/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
            }else{
            $data['gambar'] = $catalog->gambar;
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

        if($catalog->gambar != null){
                unlink($catalog->gambar);
                }

        $catalog->delete();
        return redirect('/admin/catalog');
    }
}
