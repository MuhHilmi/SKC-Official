<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    GaleriController,
    PendaftaranController,
    ProfileController,
    StudentController,
    GelombangSatuController,
    GelombangDuaController,
    GelombangTigaController,
};

// ====================
// ROUTE HALAMAN UTAMA
// ====================
Route::view('/', 'skc-official', ['title' => 'skc-official']);
Route::view('/about', 'welcome');
Route::view('/galeri', 'galeri')->name('galeri.index');
Route::view('/informasi', 'informasi', ['title' => 'informasi']);
Route::view('/ppdb', 'ppdb');
Route::view('/error', 'maintenance');
Route::view('/profilsekolah', 'informasisekolah');

// ====================
// ROUTE INFORMASI JURUSAN
// ====================
Route::view('/informasi/askep', 'informasi.askep', [
    'namajurusan' => 'Asisten Keperawatan',
    'logo' => 'LOGO_ASKEP.png',
    'kompetensi' => 'Asisten Keperawatan merupakan suatu kompetensi keahlian yang menghasilkan tenaga ahli di bidang kesehatan dalam asistensi keperawatan yang terampil dan kompeten, khususnya pemenuhan kebutuhan dasar manusia merawat kesehatan mental dan fisik.'
]);

Route::view('/informasi/farmasi', 'informasi.farmasi', [
    'namajurusan' => 'Farmasi Klinis dan Komunitas',
    'logo' => 'LOGO_FARMASI.png',
    'kompetensi' => 'Farmasi merupakan kompetensi keahlian yang mempelajari segala hal tentang obat. Mulai dari bahan kimia yang ada didalamnya, proses pembuatan obat, proses pengemasan obat, fungsi dan kegunaan obat, sampai cara distribusi dan pengelolaan stok obat.'
]);

Route::view('/informasi/tlm', 'informasi.tlm', [
    'namajurusan' => 'Teknologi Laboratorium Medik',
    'logo' => 'LOGO_TLM.png',
    'kompetensi' => 'Teknologi Laboratorium Medik merupakan kompetensi keahlian yang akan berkecimpung di dunia kesehatan untuk melaksanakan pelayanan pemeriksaan, pengukuran, penetapan dan pengujian terhadap bahan yang berasal dari manusia untuk penentuan jenis penyakit dan penyebab penyakit. Keunggulan dari kompetensi keahlian Teknologi Laboratorium Medik yaitu dalam penyerapan lulusan. Lulusan Teknologi Laboratorium Medik SMK Kesehatan Cianjur akan sangat mudah mendapatkan pekerjaan, mengingat masih kurangnnya SDM dibidang Teknologi Laboratorium Medik/Analis Kesehatan.'
]);

// ====================
// ROUTE DASHBOARD
// ====================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('/dashboard/profileguru', 'dashboard.profileguru')->name('dashboard.profileguru');
    Route::view('/dashboard/uploads', 'dashboard.uploads')->name('dashboard.uploads');

    // ====================
    // ROUTE GELOMBANG SATU
    // ====================
    Route::resource('gelombangsatu', GelombangSatuController::class)->except(['show']);
    Route::get('/dashboard/2025/gelombangsatu', [GelombangSatuController::class, 'index'])->name('dashboard.2025.gelombangsatu');

    // ====================
    // ROUTE GELOMBANG DUA
    // ====================
    Route::resource('gelombangdua', GelombangDuaController::class)->except(['show']);
    Route::get('/dashboard/2025/gelombangdua', [GelombangDuaController::class, 'index'])->name('dashboard.2025.gelombangdua');

    // ====================
    // ROUTE GELOMBANG TIGA
    // ====================
    Route::resource('gelombangtiga', GelombangTigaController::class)->except(['show']);
    Route::get('/dashboard/2025/gelombangtiga', [GelombangTigaController::class, 'index'])->name('dashboard.2025.gelombangtiga');
});

// ====================
// ROUTE PROFILE USER
// ====================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ====================
// ROUTE GALERI
// ====================
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');

// ====================
// ROUTE STUDENT
// ====================
Route::resource('student', StudentController::class)->except(['store']);
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/payment', [StudentController::class, 'showPayment'])->name('payment.show');

// ====================
// ROUTE PENDAFTARAN
// ====================
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// ====================
// ROUTE AUTENTIKASI
// ====================
require __DIR__ . '/auth.php';
