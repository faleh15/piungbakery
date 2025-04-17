<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class AdminPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Pesan',
<<<<<<< Updated upstream
            'pesan' => pesan::get(),
=======
            'pesan' => pesan::orderBy('created_at', 'desc')->get(),
>>>>>>> Stashed changes
            'content' => 'admin/pesan/index'
            ];
    return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
<<<<<<< Updated upstream
        $data = [
            'title' => 'Manajemen Pesan',
            //'pesan' => pesan::find($id),
=======
        $pesan = Pesan::find($id);
        $pesan->is_read = 1;
        $pesan->save();

        $data = [
            'title' => 'Manajemen Pesan',
            'pesan' => pesan::find($id),
>>>>>>> Stashed changes
            'content' => 'admin/pesan/show'
            ];
    return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
<<<<<<< Updated upstream
=======
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect('/admin/pesan');
>>>>>>> Stashed changes
    }
}
