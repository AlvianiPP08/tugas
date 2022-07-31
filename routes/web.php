<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nilai', [App\Http\Controllers\MataKuliahController::class, 'index'])->name('nilai');
Route::get('/hasil', [App\Http\Controllers\HasilController::class, 'index'])->name('hasil');
// route::get('/register', [AdminController::class, 'registers'])->name('registers');
Route::get('registers', [AdminController::class, 'registers'])->name('registers');
Route::post('registers', [AdminController::class, 'registers_action'])->name('registers.action');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nilaiadm', [App\Http\Controllers\MatkulController::class, 'index'])->name('nilaiadm');
Route::get('/tambahmhs', [App\Http\Controllers\MatkulController::class, 'tambahmhs'])->name('tambahmhs');
Route::post('/insertdata', [App\Http\Controllers\MatkulController::class, 'insertdata'])->name('insertdata');
Route::get('insert','MahasiswaController@insertform');
Route::post('create','MahasiswaController@insert');



// Route::get('/', function(){
//     return view('welcome');
// })->name('home');

Route::get('/logout', function () {
    \Auth::logout();
    return redirect ("/home");
});

Route::get('/halaman', function () {
    return view('halaman');
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

