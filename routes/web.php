<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ManajemenGuruController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/sarana-prasarana', [HomeController::class, 'sarana'])->name('sarana');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('visi.misi');
Route::get('/identitas-sekolah', [HomeController::class, 'identitas'])->name('identitas.sekolah');
Route::get('/ekstrakulikuler', [HomeController::class, 'ekstrakulikuler'])->name('ekskul');
Route::get('/jurusan/pplg', [JurusanController::class, 'indexes'])->name('jurusan.pplg');
Route::get('/agenda', [HomeController::class, 'agenda'])->name('agenda');
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->name('agenda.show');
Route::get('berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::post('kontaks', [KontakController::class, 'store'])->name('kontak.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //BERITA ADMIN
    Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('admin/tambah-berita', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('admin/tambah-berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('admin/edit-berita/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    //AGENDA ADMIN
    Route::get('admin/agenda', [AgendaController::class, 'index'])->name('admin.agenda');
    Route::get('admin/tambah-agenda', [AgendaController::class, 'create'])->name('admin.agenda.create');
    Route::post('admin/store/tambah-agenda', [AgendaController::class, 'store'])->name('agenda.store');
    Route::get('admin/edit-agenda/{id}', [AgendaController::class, 'edit'])->name('admin.agenda.edit');
    Route::put('/agenda/update/{id}', [AgendaController::class, 'update'])->name('agenda.update');
    Route::delete('/agenda/delete/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

    //PROFIL ADMIN
    Route::get('dashboard/profil', [ProfilSekolahController::class, 'index'])->name('profil.sekolah');
    Route::get('dashboard/profil-create', [ProfilSekolahController::class, 'create'])->name('profil.sekolah.create');
    Route::post('dashboard/profil-create', [ProfilSekolahController::class, 'store'])->name('profil.sekolah.store');
    Route::get('/profil-edit/{id}', [ProfilSekolahController::class, 'edit'])->name('profil.sekolah.edit');
    Route::put('/profil-edit/{id}', [ProfilSekolahController::class, 'update'])->name('profil.sekolah.update');
    Route::get('/profil-sekolah/{id}', [ProfilSekolahController::class, 'show'])->name('profil.sekolah.show');
    Route::delete('/profil-sekolah/{id}', [ProfilSekolahController::class, 'destroy'])->name('profil.sekolah.delete');

    Route::get('admin/sambutan', [SambutanController::class, 'index'])->name('sambutan.index');
    Route::get('admin/sambutan-create', [SambutanController::class, 'create'])->name('sambutan.create');
    Route::post('admin/sambutan-create', [SambutanController::class, 'store'])->name('sambutan.store');
    Route::get('sambutan/{id}', [SambutanController::class, 'edit'])->name('sambutan.edit');
    Route::put('sambutan/{id}', [SambutanController::class, 'update'])->name('sambutan.update');
    Route::delete('sambutan/{id}', [SambutanController::class, 'destroy'])->name('sambutan.destroy');


    Route::get('dashboard/sejarah', [SejarahController::class, 'index'])->name('sejarah.index');
    Route::get('dashboard/sejarah-create', [SejarahController::class, 'create'])->name('sejarah.create');
    Route::post('dashboard/sejarah-create', [SejarahController::class, 'store'])->name('sejarah.store');
    Route::get('dashboard/sejarah-edit{id}', [SejarahController::class, 'edit'])->name('sejarah.edit');
    Route::put('dashboard/sejarah-edit{id}', [SejarahController::class, 'update'])->name('sejarah.update');
    Route::delete('sejarah/{id}', [SejarahController::class, 'destroy'])->name('sejarah.destroy');

    Route::get('dashboard/kontak', [KontakController::class, 'index'])->name('kontak.index');
    Route::delete('kontak/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy');

    Route::get('dashboard/manajemen-guru', [ManajemenGuruController::class, 'index'])->name('manajemen.index');
    Route::get('dashboard/manajemen-guru-create', [ManajemenGuruController::class, 'create'])->name('manajemen.create');
    Route::post('dashboard/manajemen-guru-create', [ManajemenGuruController::class, 'store'])->name('manajemen.store');
    Route::get('dashboard/manajemen-guru-edit{id}', [ManajemenGuruController::class, 'edit'])->name('manajemen.edit');
    Route::put('dashboard/manajemen-guru-edit{id}', [ManajemenGuruController::class, 'update'])->name('manajemen.update');
    Route::delete('dashboard/manajemen-guru{id}', [ManajemenGuruController::class, 'destroy'])->name('manajemen.destroy');

    Route::get('dashboard/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('dashboard/jurusan-create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('dashboard/jurusan-create', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('dashboard/jurusan-edit{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('dashboard/jurusan-edit{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::delete('dashboard/jurusan{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

require __DIR__ . '/auth.php';
