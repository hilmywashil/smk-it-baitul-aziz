<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Ekstrakulikuler;
use App\Models\ManajemenGuru;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\ProfileSekolah;
use App\Models\Kontak;
use App\Models\Sambutan;
use App\Models\Sejarah;



class HomeController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::first();
        $latestGuru = ManajemenGuru::orderBy('created_at', 'asc')->take(3)->get();
        $latestBerita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('home.index',compact('sambutan', 'latestBerita', 'latestGuru'));
    }    

    public function getLatestBerita()
{
    $latestBerita = Berita::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 berita terbaru
    return $latestBerita;
}
    public function kontak()
    {
        return view('home.kontak');
    }    

    public function sejarah()
    {
        $sejarah = Sejarah::first();
        $latestBerita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('informasi_sekolah.sejarah', compact('sejarah', 'latestBerita'));
    }
    public function sarana()
    {
        $sarana = ProfileSekolah::first();
        return view('informasi_sekolah.sarana', compact('sarana'));
    }

    public function visiMisi()
    {
        $visiMisi = ProfileSekolah::first();
        $latestBerita = $this->getLatestBerita();
        return view('informasi_sekolah.visi_misi', compact('visiMisi', 'latestBerita'));
    }
    public function identitas()
    {
        $identitas = ProfileSekolah::first();
        $latestBerita = $this->getLatestBerita();
        return view('informasi_sekolah.identitas', compact('identitas', 'latestBerita'));
    }
    public function ekstrakulikuler()
    {
        $ekskul = Ekstrakulikuler::first();
        $latestBerita = $this->getLatestBerita();
        return view('informasi_sekolah.ekstrakulikuler', compact('ekskul', 'latestBerita'));
    }
    public function agenda()
    {
        $agendas = Agenda::orderBy('start_time', 'asc')->get();
        return view('agenda.index', compact('agendas'));
    }
}
