<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhscontroller;
use App\Http\Controllers\Dosencontroller;
use App\Http\Controllers\prodicontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\edomcontroller;
use App\Http\Controllers\penilaian6;

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

/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('kshome');
});

Route::get('/kontak', function () {
    return view('kskontak');
});

Route::get('/about', function () {
    return view('ksabout');
});

Route::get('/galery', function () {
    return view('ksgalery');
});

Route::get('/member', function () {
    return view('ksmember');
});*/




Route::get('/inputku',[mhscontroller::class,'insert']);
Route::get('/ksabout',[mhscontroller::class,'about']);
Route::get('/mhshome',[mhscontroller::class,'index'])->middleware('auth');
Route::get('/ksgalery',[mhscontroller::class,'galery']);
Route::get('/kskontak',[mhscontroller::class,'kontak']);
Route::get('/latihan2',[mhscontroller::class,'kirim']); 
Route::get('/beranda',[mhscontroller::class,'beranda']);
Route::get('/popil',[mhscontroller::class,'popil']);
Route::get('/kontek',[mhscontroller::class,'kontek']);
Route::get('/galeri',[mhscontroller::class,'galeri']);
Route::get('/abot',[mhscontroller::class,'abot']);
Route::post('/simpanmhs',[mhscontroller::class,'simpan']);
Route::get('/hapus/{id}',[mhscontroller::class,'hapus']);
Route::get('/editmhs/{id}',[mhscontroller::class,'edit']);
Route::post('/update/{x}',[mhscontroller::class,'update']);
//tbdosen
  
Route::get('/inputdsn',[mhscontroller::class,'insertdsn']);
Route::get('/editdosen/{nidn}',[mhscontroller::class,'editdosen']);
Route::post('/updatedsn',[mhscontroller::class,'updatedsn']);

//databes dosen 
Route::get('dsn',[Dosencontroller::class,'index'])->middleware('auth');
Route::get('/inputdsnequ',[Dosencontroller::class,'input']);
Route::post('/simpanequ',[Dosencontroller::class,'simpan']);

//database prodi
Route::get('prd',[prodicontroller::class,'index']);
Route::get('/inputprodi',[prodicontroller::class,'input']);
Route::post('/simpanprd',[prodicontroller::class,'simpan']);
Route::get('/hapusprd/{kd_prodi}', [prodicontroller::class, 'delete']);
Route::get('/editprd/{kd_prodi}', [prodicontroller::class, 'editprd']);
Route::post('/updateprd/{kd_prodi}', [prodicontroller::class, 'updateprd']);

//login
Route::get('/login1', [LoginController::class, 'index'])->middleware('guest');
Route::post('/proses', [LoginController::class, 'login1']);
Route::get('/logout', [LoginController::class, 'logout1']);


//edom
Route::get('/welcome', [edomcontroller::class, 'splashscreen'])->name('login')->middleware('guest');
Route::get('/index', [edomcontroller::class, 'index'])->middleware('auth');
Route::get('/home', [edomcontroller::class, 'homeedom'])->middleware('auth');
Route::get('/kontak', [edomcontroller::class, 'contactedom'])->middleware('auth');
// dosen
Route::get('/dosen', [edomcontroller::class, 'dosenedom'])->middleware('auth');
Route::get('/tambahdsn', [edomcontroller::class, 'tambahdosen'])->middleware('auth');
Route::post('/save', [edomcontroller::class, 'simpandosen']);
Route::get('/ubah/{nidn}', [edomcontroller::class, 'editdosen'])->middleware('auth');
Route::post('/updet/{nidn}', [edomcontroller::class, 'updatedosen'])->middleware('auth');
Route::get('/hps/{nidn}', [edomcontroller::class, 'deletedosen'])->middleware('auth');
// matkul
Route::get('/matkul', [edomcontroller::class, 'matkuledom'])->middleware('auth');
Route::get('/tambahmk', [edomcontroller::class, 'tambahmatkul'])->middleware('auth');
Route::post('/savemk', [edomcontroller::class, 'simpanmatkul'])->middleware('auth');
Route::get('/ubahmk/{id_matkul}', [edomcontroller::class, 'editmatkul'])->middleware('auth');
Route::post('/updetmk/{id_matkul}', [edomcontroller::class, 'updatematkul'])->middleware('auth');
Route::get('/hpsmk/{id_matkul}', [edomcontroller::class, 'deletematkul'])->middleware('auth');
// quesioner
Route::get('/ques', [edomcontroller::class, 'quesedom'])->middleware('auth');
Route::get('/tambahq', [edomcontroller::class, 'tambahques'])->middleware('auth');
Route::post('/saveq', [edomcontroller::class, 'simpanques'])->middleware('auth');
Route::get('/ubahq/{id_quesioner}', [edomcontroller::class, 'editques'])->middleware('auth');
Route::post('/updetq/{id_quesioner}', [edomcontroller::class, 'updateques'])->middleware('auth');
Route::get('/hpsq/{id_quesioner}', [edomcontroller::class, 'deleteques'])->middleware('auth');
Route::get('/soalques', [edomcontroller::class, 'isiques'])->middleware('auth');
Route::post('/simpanedom', [edomcontroller::class, 'tambahedommhs'])->middleware('auth');

//semester 6-------------------------------------------------------------------------------------------
Route::get('/indexnilai', [penilaian6::class,'index']);
