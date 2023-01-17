<?php

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

//Route::get('/', function () {
//    return view('pages.index');
//});
Route::get('/', function () {
    $images=Image::all();
    foreach ($images as $image){
        echo '<img src="'.$image->image_path.'">'.' <br> ';
        echo $image->user->name.'/'.$image->user->surname.' <br> ';
    }
    die();
    return view('welcome');
});
Route::get('/sign-up', function () {
    return view('pages.sign-up');
});
Route::get('/log-in', function () {
    return view('pages.log-in');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
