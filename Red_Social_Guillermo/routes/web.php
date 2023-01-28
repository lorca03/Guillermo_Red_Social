<?php

use App\Http\Controllers\CommentarioController;
use App\Http\Controllers\Home;
use App\Http\Controllers\ImageController;
use App\Models\Image;
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
    return view('/pages.index');
});
Route::middleware('auth')->group(function (){
    Route::get('/subir_imagen', [ImageController::class,'index'])->name('subir.imagen');
    Route::post('/save_imagen', [ImageController::class,'save'])->name('save.image');
    Route::post('/save_comentario', [CommentarioController::class,'save'])->name('save.comentario');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [Home::class,'index']
    )->name('dashboard');
});

require_once 'fortify.php';
