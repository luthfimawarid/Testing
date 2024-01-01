<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\DataMingguanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\pancongssController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\pancongsController;
use App\Http\Controllers\pancongs2Controller;
use App\Http\Controllers\customerController;
use App\Http\Controllers\MenusContoller;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\loginsController;
use App\Http\Controllers\resetpasswordsController;
use App\Http\Controllers\lominController;
use App\Http\Controllers\ProdukController;
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

// Route::get('/pancongs', [pancongsController::class, 'index'])->name('pancongs');
// Route::get('/tambah', [pancongsController::class, 'tambah'])->name('tambah');
// Route::delete('/menu/delete/{id}', [pancongsController::class, 'delete'])->name('menu.delete');


// Route::get('/admins',function (){
//     return view('admin.index');
// });

Route::resource('/admins', adminController::class);
Route::resource('/order', adminController::class);
Route::resource('/product', pancongsController::class);

Route::get('/customers', [customerController::class, 'index'])->name('index');
// Route::get('/customers', [customerController::class, 'cusindex'])->name('cusindex');
// Route::resource('/product', pancongsController::class);

Route::get('/tambahmenu', [pancongsController::class, 'indexTabel'])->name('indexTabel');
Route::get('/tambahmenu2', [pancongs2Controller::class, 'indexTabel'])->name('indexTabel');


Route::get('/datamingguan', [DataMingguanController::class, 'index'])->name('index');

Route::resource('/pancongs', pancongsController::class);
Route::get('deskripsi/{id}', 'deskripsiController@index');
Route::get('/menu1', [pancongsController::class,'index']);

Route::resource('/pancongs2', pancongs2Controller::class);
Route::get('deskripsi/{id}', 'deskripsiController@index');
Route::get('/menu2', [pancongs2Controller::class,'index']);




Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [RegisterController::class, 'loginIndex'])->name('loginIndex');
Route::get('/lomin', [RegisterController::class, 'lominIndex'])->name('lominIndex');
Route::post('/login', [RegisterController::class, 'loginPost'])->name('loginPost');
Route::post('/lomin', [RegisterController::class, 'lominPost'])->name('lominPost');


Route::get('/user', function(){
    $title = "FlavourOfPamer";
    $slug = "home";
    $home = " ";
    return view('home.home', compact('title', 'slug', 'home'));
});


Route::get('/coba', function(){
    return view('pamer.coba');
});
// web.php

// Route::get('/deskripsimenu/{menu_id}', 'deskripsiController@show');


Route::get('/deskripsimenu',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $deskripsi = " ";
    return view('deskripsi.home', compact('title','slug','deskripsi'));
});

// Route::get('/menu1',function (){
    
//     return view('rasa.home', compact('title','slug','rasa'));
// });

// Route::get('/menu2',function (){
//     $title = "FlavourOfPamer";
//     $slug = "home";
//     $rasa = " ";
//     return view('rasa.menu2', compact('title','slug','rasa'));
// });

Route::get('/menu3',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $rasa = " ";
    return view('rasa.menu3', compact('title','slug','rasa'));
});

Route::get('/keranjang',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $keranjang = " ";
    return view('keranjang.home', compact('title','slug','keranjang'));

});

// Route::resource('/logins', loginsController::class);

// Route::get('/logins',function (){
//     $title = "FlavourOfPamer";
//     $slug = "home";
//     $login = " ";
//     return view('login.home', compact('title','slug','login'));
// });

// Route::resource('/registrasi', registrasiController::class);
// Route::get('/registrasi', [registrasiController::class, 'registrasi'])->name('registrasi');
// Route::post('/registrasi', [registrasiController::class, 'registrasiPost'])->name('registrasiPost');


// Route::get('/registrasi',function (){
//     $title = "FlavourOfPamer";
//     $slug = "home";
//     $login = " ";
//     return view('login.registrasi', compact('title','slug','login'));

// });
// Route::get('/register', [registrasiController::class, 'registrasi']);
// Route::post('/register', [registrasiController::class, 'registrasipost'])->name('registrasipost');

// Route::get('/logins', [registrasiController::class, 'logins']);
// Route::post('/logins', [registrasiController::class, 'loginspost'])->name('logins.post');

// Route::get('/login',[LoginController::class, 'index']);
// Route::get('/register',[RegisterController::class, 'store']);
// Route::post('/register',[RegisterController::class, 'store']);

Route::get('/resetpassword',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $login = " ";
    return view('login.resetpassword', compact('title','slug','login'));

});

Route::get('/history',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $history = " ";
    return view('hipes.home', compact('title','slug','history'));
});

Route::get('/pesanan',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $pesanan = " ";
    return view('pesanan.home', compact('title','slug','pesanan'));
});

Route::get('/about', function(){
    $title = "FlavourOfPamer";
    $slug = "home";
    $about = " ";
    return view('about.about', compact('title', 'slug', 'about'));
});

Route::get('/struk', function(){
    $title = "FlavourOfPamer";
    $slug = "struk";
    $struk = " ";
    return view('keranjang.struk', compact('title', 'slug', 'struk'));
});


Route::get('/dashboard', function(){
    $title = "FlavourOfPamer";
    $slug = "dashboard";
    $dashboard = " ";
    return view('admin.isi.dashboard', compact('title', 'slug', 'dashboard'));
});

// Route::get('/order', function(){
//     $title = "FlavourOfPamer";
//     $slug = "order";
//     $dashboard = " ";
//     return view('admin.isi.index', compact('title', 'slug', 'dashboard'));
// });

Route::get('/checkout', function(){
    $title = "FlavourOfPamer";
    $slug = "dashboard";
    $checkout = " ";
    return view('checkOut.checkout', compact('title', 'slug', 'checkout'));
});

Route::get('/harian', function(){
    $title = "FlavourOfPamer";
    $slug = "dashboard";
    $harian = " ";
    return view('admin.isi.harian', compact('title', 'slug', 'harian'));
});


Route::get('/hipesadmin',function (){
    $title = "FlavourOfPamer";
    $slug = "home";
    $historyAdmin = " ";
    return view('admin.historyAdmin.home', compact('title','slug','historyAdmin'));
});

Route::get('/tambahProduk', [ProdukController::class, 'index'])->name('index');
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');


