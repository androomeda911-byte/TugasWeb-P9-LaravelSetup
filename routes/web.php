<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $fitur = ['Routing', 'Blade Template', 'Eloquent ORM', 'Artisan CLI', 'Migration'];
    return view('home', ['nama' => 'Andromeda Achmad Nugroho', 'fitur' => $fitur]);
});

Route::get('/about', function () {
    $data = [
        'Nama'          => 'Andromeda Achmad Nugorho',
        'NIM'           => '4253250063',
        'Program Studi' => 'S1 Ilmu Komputer',
        'Mata Kuliah'   => 'Pemrograman Web',
    ];
    return view('about', ['data' => $data]);
});

Route::get('/contact', function () {
    $kontak = [
        'Email'  => 'androomeda911@gmail.com',
        'GitHub' => 'github.com/androomeda911-byte',
    ];
    return view('contact', ['kontak' => $kontak]);
});

Route::get('/hello/{nama}', [PageController::class, 'hello']);