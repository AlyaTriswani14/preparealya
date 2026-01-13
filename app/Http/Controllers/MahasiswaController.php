<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan semua data mahasiswa
     */
    public function index()
    {
        // Ambil semua data mahasiswa dari database
        $mahasiswa = Mahasiswa::all();
        
        // Kirim data ke view
        return view('mahasiswa.index', compact('mahasiswa'));

    }
    
    /**
     * Tampilkan form untuk tambah mahasiswa baru
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Simpan data mahasiswa baru ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
        ]);

        // Simpan data ke database
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);

        // Redirect ke halaman tabel dengan pesan sukses
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Tampilkan form untuk edit mahasiswa
     */
    public function edit($id)
    {
        // Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Tampilkan form edit dengan data mahasiswa
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update data mahasiswa di database
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
        ]);

        // Cari data mahasiswa
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Update data
        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);

        // Redirect dengan pesan sukses
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diupdate!');
    }

    /**
     * Hapus data mahasiswa dari database
     */
    public function destroy($id)
    {
        // Cari data mahasiswa
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Hapus data
        $mahasiswa->delete();

        // Redirect dengan pesan sukses
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
