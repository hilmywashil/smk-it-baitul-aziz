<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kontak;

class DashboardController extends Controller
{
    public function index()
    {
        $beritaCount = Berita::count();
        $contactCount = Kontak::count();
        return view('dashboard',  compact('beritaCount', 'contactCount'));
    }
}
