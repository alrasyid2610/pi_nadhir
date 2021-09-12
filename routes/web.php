<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\LikeCommentController;
use App\Http\Controllers\UserProfile;
use App\Models\Comment;
use App\Models\User;
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

Route::view('/', 'home', ['tab_name' => 'Home'])->name('home');

// Route::view('/artikel', 'artikel', ['tab_name' => 'Artikel'])->name('artikel');
Route::resource('/artikel', ArtikelController::class);
// Route::get('/artikel/create')->
// middleware([
//   'checkAdmin'
// ])->name('artikel.create');
Route::get('/berita', [ArtikelController::class, 'index_berita'])->name('berita');
Route::get('/analisa', [ArtikelController::class, 'index_analisa'])->name('analisa');


Route::view('/contact', 'contact', ['tab_name' => 'Contact'])->name('contact');
Route::view('/register', 'register', ['tab_name' => 'Register'])->name('register');
Route::view('/faq', 'faq', ['tab_name' => 'Pertanyaan'])->name('faq');

Route::view('/login', 'login', ['tab_name' => 'Login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

//forgote password
Route::get('/forgot', [LoginController::class, 'indexForgot'])->name('index_forgot');
Route::post('/forgot', [LoginController::class, 'cekEmailForgot'])->name('forgot2');
Route::post('/forgot_ubah_sandi', [LoginController::class, 'ubahSandi'])->name('forgot3');
Route::post('/set_password', [LoginController::class, 'setPassword'])->name('forgot4');

// Register Route
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/dashboard_admin', [UserProfile::class, 'index_dashboard'])->name('dashboard.index');


// PROFILE
Route::get('/profile', [UserProfile::class, 'index'])
  ->name('admin_system.userProfile');
Route::put('/profile/{id}/edit', [UserProfile::class, 'update'])
  ->name('admin_system.updateProfile');



// Logout Route
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


// Kontak
Route::post('/submit_kontak', [kontakController::class, 'store'])->name('kontak.store');
Route::get('/kontak', [kontakController::class, 'index'])
->middleware([
  'checkAdmin'
])->name('daftar_kontak.index');
Route::get('/jawab_pertanyaan/{id}', [kontakController::class, 'index_jawab_pertanyaan'])->name('daftar_kontak.index.jawab_pertanyaan');
Route::put('/submit_jawaban/{id}', [kontakController::class, 'store_jawaban'])->name('kontak.store_jawaban');

Route::view('/production', 'admin.index');
Route::resource('/admin_system/dashboard_artikel', ArtikelController::class);
Route::post('/admin_system/artikel_upload_image', [ArtikelController::class, 'upload'])->name('artikel_upload_image');
Route::get('/admin_system/artikel', [ArtikelController::class, 'indexAdmin'])
  ->middleware([
    'checkAdmin'
  ])
  ->name('admin_system.index');

Route::get('/admin_system/user', function () {
  $user = User::all();
  return view('admin.user.index')->with(['data_user' => $user]);
})
  ->middleware([
    'checkAdmin'
  ])
  ->name('admin_user.index');

Route::put('/admin_system/user/{id}/{role}/edit', function ($id, $role) {
  $role = request()->role;
  if ($role == 'user') {
    User::find($id)->update([
      'role' => 'admin'
    ]);
  } else if ($role == 'admin') {
    User::find($id)->update([
      'role' => 'user'
    ]);
  }

  return redirect()->back();
})
  ->middleware([
    'checkAdmin'
  ])
  ->name('admin_user.edit');



Route::post('/article_comment', [CommentController::class, 'store']);
Route::get('/getCommentArticle/{id?}', [CommentController::class, 'getCommentArticle']);
Route::delete('/delete_comment', [CommentController::class, 'destroy']);

Route::get('/like_or_dislike/{user_id?}/{article_id?}', [LikeCommentController::class, 'likeOrDislike']);
