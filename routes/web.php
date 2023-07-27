<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

// Route::get('/user/{id?}/{aktif?}', function ($id = 1, $aktif ="Y") {
//     // return view('welcome');
//     return "<h1>Ini adalah saya $id $aktif</h1>";
// })->where('id','[0-9]*');

Route::view("/", 'dashboard');

// Route::put('simpan', function(){
//     return 'data berhasil';
// }); 

// Route::get('crud', function(){
//     return view('crud',['nama' => 'farrel']);
// });

// // Route::prefix('masterdata')->group(function(){
// //     Route::get('/data-karyawan',[CrudController::class,'index'])->name('dashboard');
// //     Route::get('/data-dosen',[CrudController::class,'edit'])->name('dashboard');
// // });

// Route::name('masterdata.')->group(function(){
//     Route::get('masterdata/data-karyawan',[CrudController::class,'index'])->name('data-karyawan');
//     Route::get('masterdata/data-dosen',[CrudController::class,'edit'])->name('data-dosen');
// });
