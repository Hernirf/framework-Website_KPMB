<?php

use Illuminate\Support\Facades\Route;
use App\Models\Anggota;


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
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/anggota', function () {
    return view('anggota',[
        "anggota" => Anggota::all()
        ]
);
})->name('anggota');




