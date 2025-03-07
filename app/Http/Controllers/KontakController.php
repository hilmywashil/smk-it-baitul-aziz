<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('kontaks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        Kontak::create($request->all());

        // return redirect()->route('kontak')
        //                 ->with('success', 'Kontak telah terkirim.');
        return response()->json(['message' => 'Pesan berhasil terkirim!'], 200);
    }

    public function show(Kontak $kontak)
    {
        return view('kontaks.show', compact('kontak'));
    }

    public function edit(Kontak $kontak)
    {
        return view('kontaks.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        $kontak->update($request->all());

        return redirect()->route('kontaks.index')
                        ->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();

        return redirect()->route('kontak.index')
                        ->with('success', 'Kontak berhasil dihapus.');
    }
}
