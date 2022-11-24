<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterSiswaController;
use App\Http\Controllers\MasterProjectController;
use App\Http\Controllers\MasterKontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;


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

//admin
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
Route::middleware('auth')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');   
    Route::get('/mastersiswa/{id_siswa}/hapus', [MasterSiswaController::class, 'hapus'])->name('mastersiswa.hapus');
    Route::resource('/admin/MasterSiswa', MasterSiswaController::class);
    Route::resource('/admin/masterproject', MasterProjectController::class);
    Route::resource('/admin/masterkontak', MasterKontakController::class);     
}); 

//guest
Route::middleware('guest')->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');    
    Route::get('/about', function () { return view('about');});
    Route::get('/contact', function () { return view('contact');});
    Route::get('/contact', function () { return view('contact');});

});




















    
Route::get('/mastersiswa', function () {
    return view('/admin/MasterSiswa');
});










// Route::get('/siswacnt', [MasterKontakController::class, 'index']);
// Route::get('/siswaprj', [MasterProjectController::class, 'index']);
// Route::get('/siswaaa', [MasterSiswaController::class, 'index']);
// Route::get('/dashboard', [DashboardController::class, 'index']);



Route::get('/masterproject', function () {
    return view('Admin.MasterProject');
});
Route::get('/masterkontak', function () {
    return view('Admin.MasterKontak');
});