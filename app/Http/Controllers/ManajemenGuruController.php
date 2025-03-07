<?php

namespace App\Http\Controllers;

use App\Models\ManajemenGuru;
use Illuminate\Http\Request;

class ManajemenGuruController extends Controller
{
public function index()
{
    $gurus = ManajemenGuru::all();
    return view('admin.manajemen-guru.index', compact('gurus'));
}

public function create()
{
    return view('admin.manajemen-guru.create');
}

public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'nama' => 'required',
        'jabatan' => 'required',
    ]);

    $imagePath = $request->file('image')->store('public/images', 'public');

    ManajemenGuru::create([
        'image' => $imagePath,
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
    ]);

    return redirect()->route('manajemen.index')->with('success', 'Guru baru telah ditambahkan.');
}

public function show($id)
{
    $guru = ManajemenGuru::findOrFail($id);
    return view('manajemen-guru.show', compact('guru'));
}

public function edit(ManajemenGuru $guru)
{
    $guru = ManajemenGuru::first();
    return view('admin.manajemen-guru.edit', compact('guru'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'nama' => 'required',
        'jabatan' => 'required',
    ]);

    $guru = ManajemenGuru::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/images', 'public');
        $guru->update([
            'image' => $imagePath,
        ]);
    }

    $guru->update([
        'nama' => $validatedData['nama'],
        'jabatan' => $validatedData['jabatan'],
    ]);

    return redirect()->route('manajemen.index')->with('success', 'Data guru telah diupdate.');
}
public function getLatestGuru()
{
    $latestGuru = ManajemenGuru::orderBy('created_at', 'asc')->take(4)->get();
    return $latestGuru;
}

public function destroy($id)
{
    $guru = ManajemenGuru::findOrFail($id);
    $guru->delete();

    return redirect()->route('manajemen.index')->with('success', 'Guru telah dihapus.');
}
}
