<?php

use App\Livewire\Guest\Home;
use App\Livewire\Guest\Registration;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/',Home::class)->name('home.login');
    Route::get('/registration',Registration::class)->name('register');
    Route::view('/register', 'Home.register')->name('register.user');
    Route::view('/login', 'Home.login')->name('login');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::view('/home', 'Admin.index')->name('admin.home');


    //settings
    Route::view('/settings', 'settings.index')->name('admin.settings');
    Route::view('/change-password', 'settings.change-password')->name('admin.password');

    //Manage Landing Page
    Route::view('/landing-page','Admin.Manage.LandingPage')->name('manageLandingPage');
});
