<?php

use App\Models\RegMemebers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegMemberController;


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

Route::post('/reg_form',[RegMemberController::class, 'store']);
// Route::get('/send-mail', [RegMemberController::class, 'index']);


// Admin side routes

Route::get('/adminlogin', [LoginController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [LoginController::class, 'adminLogin'])->name('adminlogin');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('backend.home');
    });
    Route::get('/admin/online-registration',[RegMemberController::class, 'reg_form_data']);

    Route::get('/admin/reg_form', function () {
        return view('backend.reg_members_form');
    });
    Route::get('/admin/online_reg_form', function () {
        return view('backend.online_reg_form');
    });
    Route::get('/admin/login', function () {
        return view('backend.login');
    });

    Route::get('/admin/registered-members',[RegMemberController::class, 'members_data']);
    Route::post('/admin/register-member',[RegMemberController::class, 'register_member']);
    Route::post('/admin/online_reg_form',[RegMemberController::class, 'store'])->name('reg_form');
    Route::get('/admin/update_register_member/{id}',[RegMemberController::class, 'get_member']);
    Route::post('/admin/update_register_member/{id}',[RegMemberController::class,'update_member']);
    Route::get('/admin/delete_register_member/{id}',[RegMemberController::class,'delete_member']);

    Route::get('/admin/update_online_registration_member/{id}',[RegMemberController::class, 'get_online_register_member']);
    Route::post('/admin/update_online_registration_member/{id}',[RegMemberController::class,'update_online_register_member']);
    Route::get('/admin/delete_online_registration_member/{id}',[RegMemberController::class,'delete_online_register_member']);
    Route::get('/admin/online-registration_view_on_button/{id}',[RegMemberController::class, 'data_for_online_registration_view_button']);
    Route::get('/admin/register_members_view_on_button/{id}',[RegMemberController::class, 'data_for_register_members_view_button']);
    
});