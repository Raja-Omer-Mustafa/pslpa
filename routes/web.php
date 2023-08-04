<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/board-members', function () {
    return view('board_members');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/be-a-member', function () {
    return view('be_a_member');
});

Route::get('/country-directory', function () {
    return view('country_directory');
});