<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [WelcomeController::class, "index"])->name("default");

Route::get('/home', [HomeController::class, "home"])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register')->middleware("guest");

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->middleware("guest");

Route::resource('/products', ProductsController::class)
    ->name('index','products');

Route::resource('/posts', PostsController::class)
    ->name('store', 'posts.store')
    ->name('create', 'posts.create')
    ->name('index', 'posts')
    ->name('show', 'posts.details')
    ->name('edit', 'posts.edits')
    ->name('destroy', 'posts.delete')->middleware("auth");

// Route::resource('/clients', ClientsController::class)
//     ->name('index', 'clients.dashboard');

Route::get('logout', [AuthController::class, "logout"])->name("logout")->middleware("auth");

