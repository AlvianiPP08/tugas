<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


Auth::routes();

Route::get('/', [App\Http\Controllers\HasilController::class, 'hasil'])->name('hasil');
// Route::get('/home', [App\Http\Controllers\HasilController::class, 'hasil'])->name('halaman');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('halaman');
// Route::get('/nilai', [App\Http\Controllers\MataKuliahController::class, 'index'])->name('nilai');
Route::get('/hasil', [App\Http\Controllers\HasilController::class, 'hasil'])->name('hasil');
Route::get('/halaman', [App\Http\Controllers\HomeController::class, 'index'])->name('halaman');
Route::get('/hasils', [App\Http\Controllers\HasilController::class, 'hasils'])->name('hasils');
Route::post('/rekomendasi', [App\Http\Controllers\HasilController::class, 'rekomendasi'])->name('rekomendasi');
// route::get('/register', [AdminController::class, 'registers'])->name('registers');
Route::get('registers', [AdminController::class, 'registers'])->name('registers');
Route::post('registers', [AdminController::class, 'registers_action'])->name('registers_action');
Route::get('/nilaiadm', [App\Http\Controllers\MatkulController::class, 'index'])->name('nilaiadm');

// Routes untuk menambah nilai di masing-masing penjurusan dan profesi minat bakat
Route::get('/kwc', [App\Http\Controllers\MatkulController::class, 'tambah_kwc'])->name('tambah_kwc');
Route::get('/nilai', [App\Http\Controllers\MatkulController::class, 'nilai'])->name('nilai');
Route::get('/rpl', [App\Http\Controllers\MatkulController::class, 'tambah_rpl'])->name('tambah_rpl');
Route::get('/profesi', [App\Http\Controllers\MatkulController::class, 'tambah_profesi'])->name('tambah_profesi');
Route::post('/insert_kwc', [App\Http\Controllers\MatkulController::class, 'insert_kwc'])->name('insert_kwc');
Route::post('/insert_rpl', [App\Http\Controllers\MatkulController::class, 'insert_rpl'])->name('insert_rpl');
Route::post('/insert_jarkom', [App\Http\Controllers\MatkulController::class, 'insert_jarkom'])->name('insert_jarkom');
Route::post('/insert_profesi', [App\Http\Controllers\MatkulController::class, 'insert_profesi'])->name('insert_profesi');

Route::get('insert','MahasiswaController@insertform');
Route::post('create','MahasiswaController@insert');



// Route::get('/', function(){
//     return view('welcome');
// })->name('home');

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect ("/login");
});

Route::get('/', function () {
    if (!empty(Session::get('nim'))) {
        return view('halaman');
    } else {
        return redirect ("/login");
    }
    
})->name('halaman');

// Route::get('/nilai', function () {
//     return view('nilai');
// })->name('nilai');

Route::get('/matakuliah', function () {
    return view('matakuliah');
})->name('matakuliah');

// Route::get('/hasil', function () {
//     return view('hasil');
// })->name('hasil');

