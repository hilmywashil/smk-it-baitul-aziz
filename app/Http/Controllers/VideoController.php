<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Galeri;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with('galeri')->get();
        return view('admin.video.index', compact('videos'));
    }

    public function create()
    {
        $galeri = Galeri::all();
        return view('admin.video.create', compact('galeri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required|url',
            'galeri_id' => 'required'
        ]);

        Video::create($request->all());

        return redirect()->route('video.index')->with('success', 'Video created successfully.');
    }

    public function show(Video $video)
    {
        return view('video.show', compact('video'));
    }

    public function edit(Video $video)
    {
        $galleries = Galeri::all();
        return view('admin.video.edit', compact('video', 'galleries'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required|url',
            'galeri_id' => 'required'
        ]);

        $video->update($request->all());

        return redirect()->route('video.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('video.index')->with('success', 'Video deleted successfully.');
    }
}
