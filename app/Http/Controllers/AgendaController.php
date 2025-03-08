<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::latest()->get();
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tanggal' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'nullable',
            'location' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/agenda'), $filename);
            $data['image'] = 'uploads/agenda/' . $filename;
        }

        Agenda::create($data);

        return redirect()->route('admin.agenda')->with('success', 'Agenda berhasil ditambahkan');
    }

    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        $latestBerita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('agenda.show', compact('agenda', 'latestBerita'));
    }

    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tanggal' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'nullable',
            'location' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/agenda'), $filename);
            
            if ($agenda->image && file_exists(public_path($agenda->image))) {
                unlink(public_path($agenda->image));
            }

            $data['image'] = 'uploads/agenda/' . $filename;
        }

        $agenda->update($data);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui');
    }

    public function destroy(Agenda $agenda)
    {
        if ($agenda->image && file_exists(public_path($agenda->image))) {
            unlink(public_path($agenda->image));
        }

        $agenda->delete();
        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil dihapus');
    }
}
