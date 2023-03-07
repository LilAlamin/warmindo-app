<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\pemesanancontroller;
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

//Login 
$login = logincontroller::class;

Route::get('/login',[$login,'form_login']);
Route::post('/login',[$login,'login']);
Route::get('/logout',[$login,'logout']);

//pemesanan
$pesan = pemesanancontroller::class;

Route::get('/pemesanan',[$pesan,'list_pesan']);
Route::post('/pemesanan',[$pesan,'tambah_pesan']);

//crud makanan
$admin = admincontroller::class;
Route::get('/makanan',[$admin,'list_makanan']);
Route::post('/makanan',[$admin,'tambah_makanan']);
Route::get('/makanan/hapus',[$admin,'hapus_makanan']);
Route::get('/makanan/edit',[$admin,'form_edit']);
Route::post('/makanan/edit',[$admin,'edit_masakan']);
Route::get('/histori',[$admin,'list_pesan']);
Route::get('/histori/hapus',[$admin,'hapus_pesan']);