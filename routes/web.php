<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\pancongssController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\pancongsController;
use App\Http\Controllers\MenusContoller;
use PhpParser\Node\Stmt\Return_;

Route::get('/mhs/perulangan', [mhsController::class,
            'perulangan'])->name('mhs-perulangan');

// Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');

//Route::get('/mhs/show', [mhsController::class, 'show'])->name('mhs-show');

// Route::get('nina', function(){
//     echo "NINA SINTIAH";
// });

// Route::get('/', function () {
//     echo "NINA SINTIAH";
//     return view('welcome');
// }); 

// Route::get('welcome',function(){
//     echo "Selamat Datang";
// });

// Route::get('/welcome', function(){
//     echo "Selamat Datang";
// });

// Route::get('/index', function(){
//     echo "Uji coba route dengan method GET";
// });

// Route::post('/save', function(){
//     echo "Uji coba route dengan method POST";
// });

// Route::put('/update', function(){
//     echo "Uji coba route PUT";
// });

// Route::delete('/delete', function(){
//     echo "Uji coba route DELETE";
// });

// Route::match(['get', 'post'], '/kirim', function(){
//     echo "Uji coba route method GET dan POST";
// });

// Route::any('/home', function(){
//     echo "Uji coba route ANY";
// });

// Route::get('/show/{id}', function($id){
//     echo "Nilai GET parameter id=".$id;
// });

// Route::get('/show/{id?}', function($id=1){
//     echo "Nilai GET parameter id=".$id;
// });

// Route::get('/edit/{nama}', function($nama){
//     echo "Nilai GET pada parameter nama=".$nama;
// })->where('nama','[A-Za-z]+');

// Route::get('/start', function(){
//     echo "<a href='".route('coba')."'>Start</a>";
// })->name('start');

// Route::get('/coba', function(){
//     echo "<a href='".route('start')."'>Kembali</a>";
// })->name('coba');

Route::get('/',function (){
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten websaya.com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/',function (){
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten websaya.com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/pancongs', [pancongsController::class, 'index'])->name('pancongs');
Route::get('/tambah', [pancongsController::class, 'tambah'])->name('tambah');
Route::delete('/menu/delete/{id}', [pancongsController::class, 'delete'])->name('menu.delete');


// Route::get('/admins',function (){
//     return view('admin.index');
// });

Route::resource('/admins', adminController::class);

Route::resource('/pancongs', pancongsController::class);
Route::get('deskripsi/{id}', 'deskripsiController@index');

Route::get('/user', function(){
    $title = "FlavourOfPamer";
    $slug = "home";
    $home = " ";
    return view('home.home', compact('title', 'slug', 'home'));
});


Route::get('/coba', function(){
    return view('pamer.coba');
});

Route::get('/deskripsimenu',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $deskripsi = " ";
    return view('deskripsi.home', compact('title','slug','deskripsi'));
});

Route::get('/rasa',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $rasa = " ";
    return view('rasa.home', compact('title','slug','rasa'));
});

Route::get('/keranjang',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $keranjang = " ";
    return view('keranjang.home', compact('title','slug','keranjang'));
});

Route::get('/login',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $login = " ";
    return view('login.home', compact('title','slug','login'));
});