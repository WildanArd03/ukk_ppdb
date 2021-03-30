<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class DaftarController extends Controller
{
    public function edit_peserta($id)
    {
        $siswa = Daftar::findOrFail($id);
        return view('admins.daftar-edit', compact('siswa'));
    }
    public function pdf_peserta($id)
    {
        $siswa = Daftar::findOrFail($id);
        return view('admins.pdf', compact('siswa'));
    }
    public function delete_peserta($id)
    {
        $siswa = Daftar::findOrFail($id);
        $siswa->delete();
        return redirect()->route('daftarPeserta');
    }
    public function daftar()
    {
        return view('daftars.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        Daftar::create($request->all());

        return redirect()->route('landingPage')
            ->with('success', 'Data Berhasil Di Buat');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa = Daftar::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('daftarPeserta')
            ->with('success', 'Data Berhasil Di Buat');
    }
}
