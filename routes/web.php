<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard\Users\Roles;
use App\Http\Livewire\Dashboard\Users\ViewUser;
use App\Http\Controllers\auth\SocialLoginController;


Auth::routes();
Route::get('social-auth/{provider}/callback',[SocialLoginController::class,'providerCallback']);
Route::get('social-auth/{provider}',[SocialLoginController::class,'redirectToProvider'])->name('social.redirect');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'  ,'auth:admin']
    ], function(){
        Route::group(
            [
                'prefix' => 'admin',
            ], function(){
                Route::get('/dashboard', function () {  return view('layouts.Dashboard.layout');})->name('dashboard');
                Route::get('/roles', Roles::class)->name('roles');
                Route::get('/view/user', ViewUser::class)->name('viewuser');
                Route::get('/payment_method', function () {  return view('payment_method');})->name('payment_method');
                Route::get('/signin_method', function () {  return view('signin_method');})->name('signin_method');
        });
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

