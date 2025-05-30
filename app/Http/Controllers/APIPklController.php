<?php

namespace App\Http\Controllers;

use App\Models\Pkl;
use Illuminate\Http\Request;

class APIPklController extends Controller
{
    // GET /api/pkls
    public function index()
    {
        $pkls = Pkl::with(['siswa', 'industri', 'guru'])->get();
        return response()->json($pkls);
    }

    // POST /api/pkls
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'industri_id' => 'required|exists:industris,id',
            'guru_id' => 'required|exists:gurus,id',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
        ]);

        $pkl = Pkl::create($validated);

        return response()->json($pkl, 201);
    }

    // GET /api/pkls/{id}
    public function show(string $id)
    {
        $pkl = Pkl::with(['siswa', 'industri', 'guru'])->find($id);

        if (!$pkl) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($pkl);
    }

    // PUT /api/pkls/{id}
    public function update(Request $request, string $id)
    {
        $pkl = Pkl::find($id);

        if (!$pkl) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $validated = $request->validate([
            'siswa_id' => 'sometimes|exists:siswas,id',
            'industri_id' => 'sometimes|exists:industris,id',
            'guru_id' => 'sometimes|exists:gurus,id',
            'mulai' => 'sometimes|date',
            'selesai' => 'sometimes|date|after_or_equal:mulai',
        ]);

        $pkl->update($validated);

        return response()->json($pkl);
    }

    // DELETE /api/pkls/{id}
    public function destroy(string $id)
    {
        $pkl = Pkl::find($id);

        if (!$pkl) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $pkl->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
