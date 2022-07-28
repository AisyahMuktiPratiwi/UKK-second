<?php
use App\Http\Controllers\PesanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilkmrController;
use App\Http\Controllers\TipekamarController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('depan');
});
Route::get('/depan',[DepanController::class,'index'])->name('depan');
Route::get('pesan',[DepanController::class,'pesan'])->name('pesan');
Route::get('kamar',[DepanController::class,'kamar'])->name('kamar');
Route::get('fasilitas',[DepanController::class,'fasilitas'])->name('fasilitas');
Route::get('detailfasilitas',[DepanController::class,'detailfasilitas'])->name('detailfasilitas');


Route::get('login',[DepanController::class,'login'])->name('login');
Route::get('register',[DepanController::class,'register'])->name('register');

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('tipekamar',[TipekamarController::class,'index'])->name('tipekamar');
Route::get('tmbhtipekamar',[TipekamarController::class,'create'])->name('tmbhtipekamar');
Route::get('edittipekamar',[TipekamarController::class,'edit'])->name('edittipekamar');

Route::get('fasilkmr',[FasilkmrController::class,'index'])->name('fasilkmr');
Route::get('tmbhfasilkmr',[FasilkmrController::class,'create'])->name('tmbhfasilkmr');
Route::get('editfasilkmr',[FasilkmrController::class,'edit'])->name('editfasilkmr');


Route::get('fasilitasadmin',[FasilitasController::class,'index'])->name('fasilitasadmin');
Route::get('tmbhfasilitas',[FasilitasController::class,'create'])->name('tmbhfasilitas');
Route::get('editfasilitas',[FasilitasController::class,'edit'])->name('editfasilitas');

Route::get('pengguna',[PenggunaController::class,'index'])->name('pengguna');

Route::get('datapesan',[PesanController::class,'index'])->name('pesan');