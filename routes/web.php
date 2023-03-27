<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;
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
    return redirect('/index_u');
});


Route::get('/chart',[NilaiController::class,'chart']);
Route::get('/index_u',[NilaiController::class,'index']);
Route::post('/insert_nilai',[NilaiController::class,'store'])->name('insert.nilai');