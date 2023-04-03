<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {  	
//     echo "Selamat Datang"; 
// }); 

// Route::get('/about', function () {  	
//     echo "NIM : 2141720048 <br> 
//         NAMA : SHOFIATUL AYU ANIKANINGRUM"; 
// });

// Route::get('/articles/{id}', function ($id) {  	
//     echo "Halaman Artikel dengan ID " .$id; 
// });

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about',[PageController::class, 'about']);

// Route::get('/articles/{id}',[PageController::class, 'show']);


// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about',[AboutController::class, 'about']);

// Route::get('/articles/{id}',[ArticleController::class, 'show']);

// //praktikum3
// //nomor1
// Route::get('/home', function(){
//     return "<center><h1> Selamat Datang di Web Education Studio</h1></center>";
// });
// //nomor2
// Route::prefix('product') ->group(function() {
//     Route::get('/list', [PageController::class, 'product']);
// });
// //nomor3
// Route::get('/news/{param}', [PageController::class, 'news']);
// //nomor4
// Route::prefix('program') ->group(function() {
//     Route::get('/list', [PageController::class, 'program']);
// });
// //nomor5
// Route::get('/aboutUs', [PageController::class, 'aboutUs']);
// //nomor6
// Route::resource('contactUs', PageController::class) ->only(['index']);


//PRAKTIKUM PERTEMUAN 3
//PRAKTKUM 1 (halaman home)
Route::get('/home', [PagesController::class, 'home']);
//(halaman product)
Route::prefix('product') ->group(function() {
    Route::get('/list', [PagesController::class, 'product']);
});
//(halaman news)
Route::get('/news/{param}', [PagesController::class, 'news']);
//(halaman program)
Route::prefix('program') ->group(function() {
    Route::get('/list', [PagesController::class, 'program']);
});
//(halaman aboutUs)
Route::get('/aboutUs', [PagesController::class, 'aboutUs']);
//(halaman contactUs)
Route::resource('contactUs', PagesController::class) ->only(['index']);


//PRAKTIKUM P6(AUTENTIFICATION)
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    //PRAKTIKUM 2
    Route::get('/praktikum2', function(){
        return view('layout.template');
    });

    Route::get('/dashboard', [DasboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/kuliah', [KuliahController::class, 'index']);

    //PRAKTIKUM4
    Route::get('/kendaraan', [KendaraanController::class, 'index']);

    //TUGAS PRAKTIKUM 4
    Route::get('hobi',[HobiController::class, 'index']);

    Route::get('/mata_kuliah', [MataKuliahController::class, 'index']);

    Route::get('/keluarga', [KeluargaController::class, 'index']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //PRAKTIKUM7
    Route::resource('/mahasiswas',MahasiswaController::class)->parameter('mahasiswas','id');

});
