<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DestinationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Auth/login', function () {
    return view('Auth/login');
});

Route::get('/Auth/register', function () {
    return view('Auth/register');
});

Route::get('/client/home', function () {
    return view('client/home');
})->name('home');

Route::get('/client/store', function () {
    return view('client/store');
})->name('store');

Route::get('/client/blog', function () {
    return view('client/blog');
})->name('blog');

Route::get('/client/contact', function () {
    return view('client/contact');
})->name('contact');

Route::get('/client/single', function () {
    return view('client/single');
})->name('single');

Route::get('/client/travel', function () {
    return view('client/travel');
})->name('travel');

Route::get('/client/dashboard', function () {
    return view('client/dashboard');
})->name('dashboard');

Route::get('/client/dashboardGuide', function () {
    return view('client/dashboardGuide');
})->name('dashboardGuide');

Route::get('/client/project', function () {
    return view('client/project');
})->name('project');

Route::get('/client/singleTravel', function () {
    return view('client/singleTravel');
})->name('singleTravel');

Route::get('/client/singleBlog', function () {
    return view('client/singleBlog');
})->name('singleBlog');

Route::get('/client/about', function () {
    return view('client/about');
})->name('about');

Route::get('/client/panier', function () {
    return view('client/panier');
})->name('panier');


Route::get('/admin/dashboardAdmin', function () {
    return view('admin/dashboardAdmin');
})->name('dashboardAdmin');


Route::post('/register', [AuthController::class , 'register'])->name('login');
Route::post('/login', [AuthController::class , 'login']);


Route::get('/client/dashboard', [CategoryController::class , 'index'])->name('categories.index');
Route::post('/storeCat', [CategoryController::class , 'store']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/client/dashboard', [ProduitController::class , 'index'])->name('produits.index');
Route::post('/store', [ProduitController::class , 'store']);
Route::delete('/produits/{produit}', [ProduitController::class , 'destroy'])->name('produits.destroy');

Route::post('/storeDest', [DestinationController::class, 'store']);
Route::get('/client/dashboardGuide', [DestinationController::class, 'index'])->name('destinations.index');
