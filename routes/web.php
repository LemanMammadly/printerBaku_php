<?php

use App\Http\Controllers\client\AuthController;
use App\Http\Controllers\client\CategoryController;
use App\Http\Controllers\client\HomeController;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get("/", [HomeController::class, 'index'])->name('home');
        Route::get("/register",[AuthController::class,'index'])->name('register');
        Route::post("/registerStore",[AuthController::class,'store'])->name('registerStore');
        Route::get("/login",[AuthController::class,'login'])->name('login');
        Route::post('/signin',[AuthController::class,'signin'])->name('signin');
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    }
)->name('front.');
