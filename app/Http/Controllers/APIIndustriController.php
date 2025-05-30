<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;

class APIIndustriController extends Controller
{
    // GET /api/industris
    public function index()
    {
        return response()->json(Industri::all());
    }

    // POST /api/industris
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'bidang_usaha' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kontak' => 'required|string|max:50',
            'email' => 'required|email',
            'website' => 'nullable|url',
        ]);

        $industri = Industri::create($validated);

        return response()->json($industri, 201);
    }

    // GET /api/industris/{id}
    public function show(string $id)
    {
        $industri = Industri::find($id);

        if (!$industri) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($industri);
    }

    // PUT /api/industris/{id}
    public function update(Request $request, string $id)
    {
        $industri = Industri::find($id);

        if (!$industri) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $validated = $request->validate([
            'nama' => 'sometimes|string|max:255',
            'bidang_usaha' => 'sometimes|string|max:255',
            'alamat' => 'sometimes|string',
            'kontak' => 'sometimes|string|max:50',
            'email' => 'sometimes|email',
            'website' => 'nullable|url',
        ]);

        $industri->update($validated);

        return response()->json($industri);
    }

    // DELETE /api/industris/{id}
    public function destroy(string $id)
    {
        $industri = Industri::find($id);

        if (!$industri) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $industri->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
}
