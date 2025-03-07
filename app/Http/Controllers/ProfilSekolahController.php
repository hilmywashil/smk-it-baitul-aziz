<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileSekolah;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profilSekolah = ProfileSekolah::all();
        return view('admin.profil_sekolah.index', compact('profilSekolah'));
    }

    public function create()
    {
        return view('admin.profil_sekolah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'prasarana' => 'required',
            'tujuan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'identitas' => 'required',
        ]);

        ProfileSekolah::create($request->all());

        return redirect()->route('profil.sekolah')
                        ->with('success', 'Profil Sekolah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $profilSekolah = ProfileSekolah::find($id);
        return view('profil_sekolah.show', compact('profilSekolah'));
    }

    public function edit($id)
    {
        $profilSekolah = ProfileSekolah::find($id);
        return view('admin.profil_sekolah.edit', compact('profilSekolah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'prasarana' => 'required',
            'tujuan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'identitas' => 'required',
        ]);

        $profilSekolah = ProfileSekolah::find($id);
        $profilSekolah->update($request->all());

        return redirect()->route('profil.sekolah')
                        ->with('success', 'Profil Sekolah berhasil diupdate.');
    }

    public function destroy($id)
    {
        $profilSekolah = ProfileSekolah::find($id);
        $profilSekolah->delete();

        return redirect()->route('profil_sekolah.index')
                        ->with('success', 'Profil Sekolah berhasil dihapus.');
    }
}
