<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Sejarah;

class SejarahController extends Controller
{
public function index()
{
    $sejarahs = Sejarah::all();
    return view('admin.sejarah.index', compact('sejarahs'));
}

public function create()
{
    return view('admin.sejarah.create');
}

public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image',
        'konten' => 'required',
    ]);

    $imagePath = $request->file('image')->store('images', 'public');

    Sejarah::create([
        'image' => $imagePath,
        'konten' => $request->konten,
    ]);

    return redirect()->route('sejarah.index');
}

public function show(Sejarah $sejarah)
{
    return view('sejarahs.show', compact('sejarah'));
}

public function edit(Sejarah $sejarah)
{
    $sejarah = Sejarah::first();
    return view('admin.sejarah.edit', compact('sejarah'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'konten' => 'required',
    ]);

    $sejarah = Sejarah::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $sejarah->image = $imagePath;
    }

    $sejarah->konten = $request->konten;
    $sejarah->save();

    return redirect()->route('sejarah.index')->with('success', 'Sejarah berhasil diperbarui.');
}

public function destroy(Sejarah $sejarah)
{
    $sejarah->delete();
    return redirect()->route('sejarah.index');
}
}
