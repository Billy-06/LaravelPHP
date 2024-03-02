<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [WelcomeController::class, "index"])->name("default");

Route::get('/home', [HomeController::class, "home"])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::resource('/products', ProductsController::class)
    ->name('index','products');

Route::name('posts.')->prefix('posts')->group( function() {

    Route::get('/create', function () {
        return view('common.posts.create');
    })->name('create');

    Route::get('/', function () {
        return view('common.posts.posts');
    })->name('store');
    
    Route::post('/', function (Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => ['required','min:10']
        ]);
        
        return redirect()->route('posts.create')
        ->with('success', 'Post submitted Title: ' . $request->input('title') . 'Content: ' . $request->input('content') );
    })->name('store');
});