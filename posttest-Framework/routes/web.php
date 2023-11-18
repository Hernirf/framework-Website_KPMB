<?php

use App\Models\Anggota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;


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

Route::get('/', function () {
    return view('landing',[
    'depar' =>[
    [
        'nama' => 'KPSDM',
    ],
    [
        'nama' => 'KESOSMAS',
    ],
    [
        'nama' => 'EKSTERNAL',
    ],
    [
        'nama' => 'BUD',
    ],
    [
        'nama' => 'KESEKRETARIATAN',
    ]
    ]
    ]);
})->name('landing');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register/action',[
    AuthController::class, 'SignUp'
])->name('register.action');

Route::post('/login/action',[
    AuthController::class, 'loginn'
])->name('login.action');

Route::get('/logout',[
    AuthController::class, 'logout'
])->name('logout');


Route::middleware(['auth'])->group(function () {


    Route::get('/anggota', function () {
        return view('anggota.index',["anggota" => Anggota::all()]
    );})->name('anggota');

    Route::controller(AnggotaController::class)->group(function(){
        Route::get('/tambahData', 'tambah')->name('Anggota.add');
        Route::post('/tambahData/action','store')->name('Anggota.store');
        Route::get('/editData/{id}', 'edit')->name('Anggota.edit');
        Route::post('/editData/{id}/action','update')->name('Anggota.update');
        Route::post('/delete/{id}/action', 'delete')->name('Anggota.delete');
        Route::get('/download', 'download_excel')->name('Anggota.download');
    });

});













