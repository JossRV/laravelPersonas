<?php

use App\Http\Controllers\personas;
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


Route::get('/',[personas::class,'index']) -> name('personas.index');
Route::get('/agregar',[personas::class,'create']) -> name('personas.create');
Route::post('/store',[personas::class,'store']) -> name('personas.store');
Route::get('/edit/{id}',[personas::class,'edit'])->name('personas.edit');
Route::put('/update/{id}',[personas::class,'update'])->name('personas.update');
Route::delete('/destroy/{id}',[personas::class,'destroy'])->name('personas.destroy');