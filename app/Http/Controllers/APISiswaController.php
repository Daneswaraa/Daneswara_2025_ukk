<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class APISiswaController extends Controller
{
    /**
     * Menampilkan semua data siswa
     */
    public function index()
    {
        $siswa = Siswa::all();
        return response()->json($siswa, 200);
    }

    /**
     * Menyimpan data siswa baru
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->gender = $request->gender;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        $siswa->email = $request->email;
        $siswa->status_lapor_pkl = $request->status_lapor_pkl ?? false;
        $siswa->save();

        return response()->json($siswa, 201);
    }

    /**
     * Menampilkan data 1 siswa
     */
    public function show(string $id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
        }

        return response()->json($siswa, 200);
    }

    /**
     * Update data siswa
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
        }

        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->gender = $request->gender;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        $siswa->email = $request->email;
        $siswa->status_lapor_pkl = $request->status_lapor_pkl;
        $siswa->save();

        return response()->json($siswa, 200);
    }

    /**
     * Hapus data siswa
     */
    public function destroy(string $id)
    {
        $deleted = Siswa::destroy($id);

        if (!$deleted) {
            return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
        }

        return response()->json(['message' => 'Siswa berhasil dihapus'], 200);
    }
}
