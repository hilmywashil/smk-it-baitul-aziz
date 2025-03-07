<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;

class SambutanController extends Controller
{
    public function index()
    {
        $sambutans = Sambutan::all();
        return view('admin.sambutan.index', compact('sambutans'));
    }

    public function create()
    {
        return view('admin.sambutan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'konten' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Sambutan::create([
            'image' => $imagePath,
            'konten' => $request->konten,
        ]);

        return redirect()->route('sambutan.index');
    }

    public function show(Sambutan $sambutan)
    {
        return view('sambutans.show', compact('sambutan'));
    }

    public function edit(Sambutan $sambutan)
    {
        $sambutan = Sambutan::first();
        return view('admin.sambutan.edit', compact('sambutan'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'konten' => 'required',
    ]);

    $sambutan = Sambutan::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $sambutan->image = $imagePath;
    }

    $sambutan->konten = $request->konten;
    $sambutan->save();

    return redirect()->route('sambutan.index')->with('success', 'Sambutan berhasil diperbarui.');
}


    public function destroy(Sambutan $sambutan)
    {
        $sambutan->delete();
        return redirect()->route('sambutans.index');
    }
}
