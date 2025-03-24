<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('admin.siswa.dashboard', compact('siswas'));
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
    /**
 * Simpan data siswa ke dalam database.
 */
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'status' => 'required',
        'tanggal_masuk' => 'required|date',
        'tanggal_keluar' => 'nullable|date',
    ]);

    $siswa = Siswa::create($request->all());

    return response()->json(['success' => 'Data berhasil disimpan!', 'siswa' => $siswa]);
}

/**
 * Ambil semua data siswa dalam format JSON.
 */
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
    }
}
