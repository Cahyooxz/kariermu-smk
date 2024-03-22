<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route laravel breezer
Route::get('/', function () {
    return view('index',[
        'title' => 'Login'
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard',[
        'title' => 'Dashboard'
    ]
);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// end


//routing dan memberi izin kepada role
Route::get('admin',function(){
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('penulis',function(){
    return view('tulisan');
})->middleware(['auth', 'verified', 'role:penulis|admin']);

Route::get('siswa',function(){
    return view('student/datasiswa',
    [
        'title' => 'Data Siswa'
    ]);
})->middleware(['auth', 'verified', 'role:penulis|admin|siswa']);

Route::get('siswa/tambah',function(){
    return view('student/datasiswa_add',
    [
        'title' => 'Tambah Data Siswa'
    ]);
})->middleware(['auth', 'verified', 'role:penulis|admin|siswa']);

Route::get('siswa/edit',function(){
    return view('student/datasiswa_update',
    [
        'title' => 'Edit Data Siswa'
    ]);
})->middleware(['auth', 'verified', 'role:penulis|admin|siswa']);

Route::get('tulisan',function(){
    return view('tulisan');
})->middleware(['auth', 'verified', 'role_or_permission:lihat-tulisan|admin']);

require __DIR__.'/auth.php';