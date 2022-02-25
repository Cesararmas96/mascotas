<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EspecieController;
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\Admin\RazaController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('especies', EspecieController::class)->names('admin.especies');
Route::resource('razas', RazaController::class)->names('admin.razas');
Route::resource('personas', PersonaController::class)->names('admin.personas');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('users', UserController::class)->names('admin.users');
