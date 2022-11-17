<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\back_end\banner_controller;
use App\Http\Controllers\back_end\aboutUsController;
use App\Http\Controllers\back_end\serviceController;



Route::get('/', function () {
    return view('dashboard.dashboard');
})->middleware('loginCheck')->middleware('prevent-back-history');

Route::get('/administrator',[authController::Class,'login_page']);
Route::get('/login', [authController::Class, 'login']);
Route::get('/logout',[authController::Class, 'logout']);

Route::get('/forgot-password',[authController::Class, 'forgotPpassword']);
Route::post('/forgotpassword',[authController::Class, 'handleSubmition']);
Route::get('/password/reset/{token}',[authController::Class, 'showResetForm'])->name('user.reset.password');
Route::get('/submit_reset',[authController::Class, 'resetPassword'])->name('user.reset.password.page');

Route::group(['prefix' => 'banner','middleware' => 'loginCheck'], function () {
    Route::get('banner_data',[banner_controller::Class,'index'])->name('banner_content')->middleware('prevent-back-history');
    Route::get('/get_content',[banner_controller::Class, 'getBannerInfo'])->name('banner_get')->middleware('prevent-back-history');
    Route::get('/add', [banner_controller::Class, 'newInsertion'])->name('new_banner')->middleware('prevent-back-history');
    Route::post('/insert',[banner_controller::Class,'insert_banner'])->name('insert_banner')->middleware('prevent-back-history');
    Route::get('/delete/{id}',[banner_controller::class, 'banner_del'])->name('banner_delete')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[banner_controller::Class, 'edit_page'])->name('banner.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [banner_controller::Class, 'edit_submit'])->name('edit_submit')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'about_us', 'middleware'=>'loginCheck'],function(){
    Route::get('/about_us', [aboutUsController::Class, 'index'])->name('about.us.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[aboutUsController::Class, 'eidt'])->name('about_us.edit')->middleware('prevent-back-history');
    Route::post('/update',[aboutUsController::Class, 'update'])->name('about_us_edit')->middleware('prevent-back-history');
    Route::get('/insert',[aboutUsController::Class, 'insert_page'])->name('insert.about_us')->middleware('prevent-back-history');
    Route::post('/new_insert',[aboutUsController::Class, 'newInsert'])->name('new.about_us')->middleware('prevent-back-history');
    Route::get('/delete/{id}',[aboutUsController::Class, 'delete'])->name('about_us.delete')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'service', 'middleware'=>'loginCheck'],function(){
    Route::get('/add',[serviceController::Class, 'add'])->name('add.service');
    Route::post('/insert',[serviceController::Class, 'insert'])->name('service.insert');
    Route::get('/service',[serviceController::Class, 'index'])->name('service.content');
    Route::get('/edit/{id}',[serviceController::Class, 'edit'])->name('service.edit.page');
    Route::post('/update',[serviceController::Class, 'update'])->name('service.update');
    Route::get('/delete/{id}', [serviceController::Class, 'delete'])->name('service.delete');
});

// password reset link = https://www.youtube.com/watch?v=SuIQ20H-hc4
// after login browser back_button = https://www.itsolutionstuff.com/post/laravel-5-how-to-prevent-browser-back-button-after-user-logoutexample.html