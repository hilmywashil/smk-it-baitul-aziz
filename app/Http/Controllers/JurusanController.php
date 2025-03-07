<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusans'));
    }
    public function indexes()
    {
        $latestBerita = Berita::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 berita terbaru
        return view('jurusan.pplg', compact('latestBerita'));
    }

    public function create()
    {
        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'nama' => 'required',
            'konten' => 'required',
        ]);

        $imagePath = $request->file('image')->store('public/images', 'public');

        Jurusan::create([
            'image' => $imagePath,
            'nama' => $request->nama,
            'konten' => $request->konten,
        ]);

        return redirect()->route('jurusan.index')->with('success', 'Jurusan baru telah ditambahkan.');
    }

    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('admin.jurusan.show', compact('jurusan'));
    }

    public function edit(Jurusan $jurusan)
    {
        $jurusan = Jurusan::first();
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'nama' => 'required',
            'konten' => 'required',
        ]);

        $jurusan = Jurusan::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images', 'public');
            $jurusan->update([
                'image' => $imagePath,
            ]);
        }

        $jurusan->update([
            'nama' => $validatedData['nama'],
            'konten' => $validatedData['konten'],
        ]);

        return redirect()->route('jurusan.index')->with('success', 'Data jurusan telah diupdate.');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan telah dihapus.');
    }
}
