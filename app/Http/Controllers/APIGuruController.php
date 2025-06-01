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
        $guru = Guru::all();
        return response()->json($guru, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:50',
                'nip' => 'required|string|max:18|unique:gurus,nip',
                'gender' => 'required|in:L,P', // ubah di sini
                'alamat' => 'required|string',
                'kontak' => 'required|string|max:16',
                'email' => 'required|email|max:30|unique:gurus,email',
            ]);

            $guru = new Guru();
            $guru->nama = $request->nama;
            $guru->nip = $request->nip;
            $guru->gender = $request->gender; // ubah di sini
            $guru->alamat = $request->alamat;
            $guru->kontak = $request->kontak;
            $guru->email = $request->email;
            $guru->save();

            return response()->json([
                'message' => 'Data guru berhasil ditambahkan',
                'data' => $guru
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guru = Guru::find($id);
        if (!$guru) {
            return response()->json(['message' => 'Data guru tidak ditemukan'], 404);
        }
        return response()->json($guru, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $guru = Guru::find($id);
            if (!$guru) {
                return response()->json(['message' => 'Data guru tidak ditemukan'], 404);
            }

            $request->validate([
                'nama' => 'required|string|max:50',
                'nip' => 'required|string|max:18|unique:gurus,nip,' . $id,
                'gender' => 'required|in:L,P', // ubah di sini
                'alamat' => 'required|string',
                'kontak' => 'required|string|max:16',
                'email' => 'required|email|max:30|unique:gurus,email,' . $id,
            ]);

            $guru->nama = $request->nama;
            $guru->nip = $request->nip;
            $guru->gender = $request->gender; // ubah di sini
            $guru->alamat = $request->alamat;
            $guru->kontak = $request->kontak;
            $guru->email = $request->email;
            $guru->save();

            return response()->json([
                'message' => 'Data guru berhasil diperbarui',
                'data' => $guru
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);
        if (!$guru) {
            return response()->json(['message' => 'Data guru tidak ditemukan'], 404);
        }
        $guru->delete();

        return response()->json(['message' => 'Data guru berhasil dihapus'], 200);
    }
}
