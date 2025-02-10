<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'Home.index')->name('home.login');
    Route::view('/register', 'Home.register')->name('register.user');
    Route::view('/login', 'Home.login')->name('login.user');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::view('/home', 'Admin.index')->name('admin.home');


    //settings
    Route::view('/settings', 'settings.index')->name('admin.settings');
    Route::view('/change-password', 'settings.change-password')->name('admin.password');
});
