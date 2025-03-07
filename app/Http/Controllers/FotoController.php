<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Galeri;

class FotoController extends Controller
{
    public function index()
    {
        $fotos = foto::with('galeri')->get();
        return view('admin.foto.index', compact('fotos'));
    }

    public function create()
    {
        $galeri = galeri::all();
        return view('admin.foto.create', compact('galeri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_path' => 'required|image',
            'galeri_id' => 'required'
        ]);

        $imagePath = $request->file('image_path')->store('fotos', 'public');

        foto::create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'galeri_id' => $request->galeri_id
        ]);

        return redirect()->route('foto.index')->with('success', 'foto created successfully.');
    }

    public function show(foto $foto)
    {
        return view('fotos.show', compact('foto'));
    }

    public function edit(foto $foto)
    {
        $galeri = galeri::all();
        return view('admin.foto.edit', compact('foto', 'galeri'));
    }

    public function update(Request $request, foto $foto)
    {
        $request->validate([
            'title' => 'required',
            'image_path' => 'image',
            'galeri_id' => 'required'
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('fotos', 'public');
            $foto->update([
                'title' => $request->title,
                'image_path' => $imagePath,
                'galeri_id' => $request->galeri_id
            ]);
        } else {
            $foto->update($request->only('title', 'galeri_id'));
        }

        return redirect()->route('fotos.index')->with('success', 'foto updated successfully.');
    }

    public function destroy(foto $foto)
    {
        $foto->delete();
        return redirect()->route('foto.index')->with('success', 'foto deleted successfully.');
    }
}
