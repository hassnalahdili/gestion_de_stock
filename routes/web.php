<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\composantcontroller;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\logcontroller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homecontroller::class,'index'])->name('homepage');
Route::get('/home',[homecontroller::class,'indexh'])->name('homepage2');
Route::get('/login',[logController::class,'show'])->name('login.show');
Route::post('/login',[logController::class,'login'])->name('login');
Route::get('/logout',[logcontroller::class,'logout'])->name('login.logout');
Route::get('/search', [Usercontroller::class,'search']);
Route::get('/searchc',[composantcontroller::class,'search']);
Route::get('/searchcl',[ClientController::class,'search']);
Route::get('/searchf',[FournisseurController::class,'search']);
Route::resource('users',Usercontroller::class);
Route::resource('composants',composantcontroller::class);
Route::resource('categories',CategorieController::class);
Route::resource('warehouses',WarehouseController::class);
Route::resource('clients',ClientController::class);
Route::resource('fournisseurs',FournisseurController::class);
Route::resource('sessions',SessionController::class);
Route::resource('achats',AchatController::class);
Route::resource('ventes',VenteController::class);




