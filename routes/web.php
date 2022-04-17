<?php
use App\Models\Post;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------s---------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'home']);

Route::get('/about', [PostController::class, 'about']);

Route::get('/blog',[PostController::class, 'index'] );

Route::get('halaman-blog/{post:slug}', [PostController::class, 'singlepost']);

Route::get('/categories/{category:slug}',[PostController::class, 'category']);

Route::get('/userpost/{user:username}',[PostController::class, 'userspost']);

Route::get('/categories',[PostController::class, 'categories']);

// menentukan routes yang bisa diakses berdasarkan level
// login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

// register
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store']);

//dashboard
Route::get('/dashboard',function(){
    return view('dashboard.index',[
        'title' => 'MFL | Dashboard',
    ]);

})->middleware('auth');

// ROUTES TIPE RESOURCE INI OTOMATIS UNTUK MENGELOLA CRUD DASHBOARD
Route::resource('/dashboard/mypost', DashboardPostController::class)->middleware('auth');

// ROUTE ADMIN CATEGORY
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
