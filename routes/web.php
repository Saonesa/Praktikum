<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Sahrul Gunawan',
        'lahir'=>'Bandung, 30 Desember 2004',
        'hobi'=>'Belajar',
        'jk'=>'Laki-laki',
        'agama'=>'Islam',
        'alamat'=>'Komplek Permata Biru',
        'telp'=>'087718067627',
        'email'=>'sahrul@gmail.com',

    ];
    return view('biodata',$data);
});
Route::get('/list_siswa', [BiodataController::class, 'index']);
