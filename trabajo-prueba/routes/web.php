<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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
    return view('auth.login');
});

//route::get('/punto_uno_cliente',function(){
  //  return view('punto_uno_cliente.index');
//});

//Route::get('punto_uno_cliente/create',[ClienteController::class,'create']);
Route::resource ('punto_uno_cliente',ClienteController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [ClienteController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'],function () {
 
  Route::get('/', [ClienteController::class, 'index'])->name('home');
});

