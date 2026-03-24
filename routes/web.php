<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Landing Page
Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();

// Protected Dashboard Route
Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('auth');