<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class APIGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Method untuk menampilkan semua data atau data Guru
        $guru = Guru::get();
        return response()->json($guru, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 3. Method untuk menyimpan (Create) Guru Baru
        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->alamat = $request->alamat;
        $guru->kontak = $request->kontak;
        $guru->email = $request->email;
        $guru->save();

        return response()->json($guru, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 4. Method untuk menampilkan data satu Guru
        $guru = Guru::find($id);
        return response()->json($guru, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 5. Method untuk mengupdate data Guru
        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->alamat = $request->alamat;
        $guru->kontak = $request->kontak;
        $guru->email = $request->email;
        $guru->save();

        return response()->json($guru, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 6. Method untuk menghapus (Delete) data satu Guru
        Guru::destroy($id);

        return response()->json(["message" => "Deleted"], 200);
    }
}