<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeknoController;
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

//route resource
Route::get('/data_siswa', function (){
    return view('data_siswa');
});

Route::get('/home', function (){
    return view('home');
});

// Route::get('/blog', function (){
//     return view('blog');
// });

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');


Route::get('/tekno', [TeknoController::class, 'index'])->name('tekno');


Route::get('/contact', function (){
    return view('contact');
});
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/tampil', function (){
    return view('tampil');
});
Route::get('/tampil/search',[PostController::class, 'search']);

Route::group(['middleware' => 'guest'], function(){
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.store');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/home2', [HomeController::class, 'tampil']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
