<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nilai', [App\Http\Controllers\MataKuliahController::class, 'index'])->name('nilai');
Route::get('/hasil', [App\Http\Controllers\HasilController::class, 'index'])->name('hasil');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('insert','MahasiswaController@insertform');
Route::post('create','MahasiswaController@insert');




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

