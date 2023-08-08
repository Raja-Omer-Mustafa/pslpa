<?php

use App\Http\Controllers\RegMemberController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
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

Route::post('/reg_form',[RegMemberController::class, 'store'])->name('reg_form');

Route::get('/admin/index', function () {
    return view('backend.layout.login');
});
