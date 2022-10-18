<?php

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
    return view('welcome');
});

Route::get('coba', function(){
    return "halo gan";
});

Route::get('coba1', function(){
    return ['Fiony', 'Eve', 'Olla'];
});

Route::get('coba2', function(){
    return [
        'Nama'=> 'Nasywa Nur Shafinna',
        'Kelas' => 'XII RPL 5',
        'NIS' => '3103120159'
    ];
});

Route::get('coba3', function(){
    return response()-> json(
        [
            'Nama'=> 'Nasywa Nur Shafinna',
            'Kelas' => 'XII RPL 5',
            'NIS' => '3103120159'
        ],201
    );
});