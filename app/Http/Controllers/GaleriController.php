<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $galeri = Galeri::create($validatedData);

        return redirect()->route('galeri.index')->with('success', 'Galeri baru berhasil ditambahkan.');
    }

    public function show(Galeri $Galeri)
    {
        return view('galeris.show', compact('Galeri'));
    }

    public function edit(Galeri $Galeri)
    {
        return view('admin.galeri.edit', compact('Galeri'));
    }

    public function update(Request $request, Galeri $Galeri)
    {
        $request->validate(['name' => 'required']);
        $Galeri->update($request->all());
        return redirect()->route('galeri.index')->with('success', 'Galeri updated successfully.');
    }

    public function destroy(Galeri $Galeri)
    {
        $Galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Galeri deleted successfully.');
    }
}
