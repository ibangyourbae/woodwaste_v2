<?php

use App\Http\Controllers\AdminPranalaController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AllWoodController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WoodpediaController;
use App\Http\Controllers\AdminWooddataController;
use App\Http\Controllers\AdminWoodpediaController;
use App\Http\Controllers\WoodController;

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
//     return view('home',[
//         'title' => 'Home',
//         'css' => 'Beranda',
//         'active' => 'home'
//     ]);
// })->middleware('guest');
Route::get('/', function(){
    $woodpedia = DB::table('woodpedias')->get();
    $wooddata = DB::table('wooddatas')->get();
    $pranala = DB::table('pranalas')->get();
    
    return view('home',[
        'title' => 'Home',
        'css' => 'Beranda',
        'active' => 'home',
        'woodpedia' => $woodpedia,
        'wooddata' => $wooddata,
        'pranala' => $pranala
    ]);
})->middleware('guest');

// Route::get('/',[BerandaController::class,'index'])->middleware('guest');

// Route::get('/home',[BerandaController::class,'home'])->middleware('guest');

Route::get('/home', function () {
    $woodpedia = DB::table('woodpedias')->get();
    $wooddata = DB::table('wooddatas')->get();
    $pranala = DB::table('pranalas')->get();
    return view('dashboard.index',[
        'title' => 'Dashboard',
        'active' => 'home',
        'css' => 'Beranda',
        'woodpedia' => $woodpedia,
        'wooddata' => $wooddata,
        'pranala' => $pranala
    ]);
});

Route::get('/allwood',function(){
    $allwood = DB::table('all_wood')->get();
    $stores = DB::table('stores')->get();
    return view('allwood',[
        'title' => 'All Wood',
        'css' => 'Allwood',
        'active' => 'allwood',
        'allwood' => $allwood,
        'stores' => $stores

    ]);
});

Route::get('/allwood/{store:slug}', [AllWoodController::class, 'showStore']);
Route::get('/allwood/allwood-my-store/{store:slug}',[AllWoodController::class, 'showMyStore'])->middleware('auth');
Route::get('/allwood/{store:slug}/edit', [AllWoodController::class, 'editStore'])->middleware('auth');
Route::post('/allwood/{store:slug}/update', [AllWoodController::class, 'updateStore'])->middleware('auth');

Route::get('/admin',function(){
    $woodpedia = DB::table('woodpedias')->get();
    $wooddata = DB::table('wooddatas')->get();
    $allwood = DB::table('all_wood')->get();
    $pranala = DB::table('pranalas')->get();
    return view('admin.index',[
        'title' => 'Dashboard Admin',
        'woodpedia' => $woodpedia,
        'wooddata' => $wooddata,
        'allwood' => $allwood,
        'pranala' => $pranala
    ]);
})->middleware('is_admin');

// Route::get('/allwood',[AllWoodController::class,'index']);
// Route::get('/woodpedia',function(){
//     return view('woodpedia',[
//         'title' => 'Woodpedia',
//         'css' => 'Beranda',
//         'active' => 'woodpedia'
//     ]);
// });

Route::get('/woodpedia',[WoodpediaController::class,'index']);
Route::get('/woodpedia/{woodpedia:slug}',[WoodpediaController::class,'show']);

Route::get('/wooddata',function(){
    $woodpedia = DB::table('woodpedias')->get();
    $wooddata = DB::table('wooddatas')->get();
    return view('woodData',[
        'title' => 'Wood Data',
        'css' => 'wooddata',
        'active' => 'wooddata',
        'woodpedia' => $woodpedia,
        'wooddata' => $wooddata
    ]);
});

Route::get('/dashboard',function(){
    $woodpedia = DB::table('woodpedias')->get();
    $wooddata = DB::table('wooddatas')->get();
    $pranala = DB::table('pranalas')->get();

    return view('dashboard.index',[
        'title' => 'Dashboard',
        'active' => 'home',
        'css' => 'Beranda',
        'woodpedia' => $woodpedia,
        'wooddata' => $wooddata,
        'pranala' => $pranala
    ]);
})->middleware('auth');

Route::get('/kontak',function(){
    return view('kontak',[
        'title' => 'Kontak',
        'css' => 'Kontak',
        'active' => 'kontak'
    ]);
});

Route::get('/allwood-create-wood',[WoodController::class,'create'])->middleware('auth');
Route::post('/allwood-create-wood',[WoodController::class,'store'])->middleware('auth');

Route::get('/allwood/edit/{id}',[WoodController::class,'edit'])->middleware('auth');
Route::post('/allwood/update/{id}',[WoodController::class,'update'])->middleware('auth');
Route::delete('/allwood/delete/{id}',[WoodController::class,'destroy'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::resource('/profile', ProfileController::class)->middleware('auth');

Route::resource('/admin/woodpedia', AdminWoodpediaController::class)->middleware('is_admin');
//Route Woodpedia MANUAL COKK
Route::get('/admin/woodpedia/{id}/edit',[AdminWoodpediaController::class,'edit'])->middleware('is_admin');
Route::post('/admin/woodpedia/{id}/update',[AdminWoodpediaController::class,'update'])->middleware('is_admin');
Route::delete('/admin/woodpedia/{id}/delete',[AdminWoodpediaController::class,'destroy'])->middleware('is_admin');
// Route::get('admin/woodpedia/checkSlug',[AdminWoodpediaController::class,'checkSlug']);
// Route Wood Data
Route::resource('/admin/wooddata', AdminWooddataController::class)->middleware('is_admin');
Route::get('/admim/wooddata/{id}/edit',[AdminWooddataController::class,'edit'])->middleware('is_admin');
Route::post('/admin/wooddata/{id}/update',[AdminWooddataController::class,'update'])->middleware('is_admin');
// Route::get('admin/wooddata',[AdminWooddataController::class,'index']);
Route::get('/allwood-create',[AllWoodController::class,'create'])->middleware('auth');
Route::post('/allwood-create',[AllWoodController::class,'store'])->middleware('auth');

// Pranala Route
Route::resource('/admin/pranala', AdminPranalaController::class)->middleware('is_admin');
// Route::get('/admin/pranala',[AdminPranalaController::class,'index'])->middleware('is_admin');
// Route::get('/admin/pranala/create', [AdminPranalaController::class, 'create'])->middleware('is_admin');
// Route::post('/admin/pranala/store', [AdminPranalaController::class, 'store'])->middleware('is_admin');

// Route::get('/admin/pranala/{slug}/edit', [AdminPranalaController::class, 'edit'])->middleware('is_admin');

// Pranala Route Manual cok
Route::get('/admin/pranala/edit/{id}',[AdminPranalaController::class,'edit'])->middleware('is_admin');
Route::post('/admin/pranala/update/{id}',[AdminPranalaController::class,'update'])->middleware('is_admin');