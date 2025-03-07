<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::where('user_id', auth()->user()->id)->latest()->get();
        return view('admin.berita.index', compact('berita'));
    }
    public function berita()
    {
        $berita = Berita::latest()->get();
        return view('berita.berita', compact('berita'));
    }


    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'konten' => 'required|string',
            'tgl' => 'required|date',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $image_url = Storage::url($path);
        } else {
            return response()->json(['error' => 'Image file is required.'], 400);
        }

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->konten = $request->konten;
        $berita->tgl = $request->tgl;
        $berita->image = $image_url;
        $berita->user_id = auth()->user()->id;
        $berita->save();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil disimpan');
    }

    public function edit($id)
    {
        $berita = Berita::where('user_id', auth()->user()->id)->findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'tgl' => 'required|date',
            'konten' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $berita = Berita::where('user_id', auth()->user()->id)->findOrFail($id);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $image_url = Storage::url($path);
            $berita->image = $image_url;
        }

        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->tgl = $request->tgl;
        $berita->konten = $request->konten;
        $berita->save();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui.');
    }

    public function getLatestBerita()
    {
        $latestBerita = Berita::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 berita terbaru
        return $latestBerita;
    }
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        $latestBerita = $this->getLatestBerita();
        return view('berita.show', compact('berita', 'latestBerita'));
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }

        $berita->delete();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus.');
    }
}
