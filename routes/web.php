<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NasabahControler;

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


Route::get('/admin/dashboard', function () {
    return view('admin.layouts.master');
});


Route::get('/loginadmin',[AdminController::class, 'loginadmin']);

Route::post('/prosses_login',[AdminController::class, 'prosses_login']);
Route::get('/logout',[AdminController::class, 'logout']);

Route::get('/',[NasabahControler::class, 'loginnasabah']);

  Route::get('/admin/register', function () {
      return view('admin.layouts.pages.register.index');
  });

  Route::get('/admin/kelola-akun', function () {
      return view('admin.layouts.pages.kelola_akun.index');
  });

  Route::get('/admin/lihat-saldo', function () {
      return view('admin.layouts.pages.lihat_saldo.index');
  });

  Route::get('/admin/kirim-saldo', function () {
      return view('admin.layouts.pages.kirim_saldo.index');
  });

  Route::get('/admin/tarik-tunai', function () {
      return view('admin.layouts.pages.tarik_tunai.index');
  });


// Admin seting

Route::get('/admin/setting', function () {
    return view('admin.layouts.pages.dashboard.setting.index');
});
