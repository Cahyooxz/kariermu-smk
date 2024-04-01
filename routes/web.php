<?php

use App\Http\Controllers\Controller;
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

Route::get('/nilai', function () {
    return view('data_nilai',[
        'title' => 'Data Nilai Siswa'
    ]);
}
);
Route::get('/nilai/detail_nilai', function () {
    return view('detail_data_nilai',[
        'title' => 'Detail Data Nilai Siswa'
    ]);
}
);

// Route::get('/dashboard/detail_status', function () {
//     return view('detail_status');
// });

Route::get('detail_status',[Controller::class, 'detailStatus'])->name('detail.status');

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
