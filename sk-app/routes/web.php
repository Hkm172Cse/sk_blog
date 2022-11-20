<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\back_end\banner_controller;
use App\Http\Controllers\back_end\aboutUsController;
use App\Http\Controllers\back_end\serviceController;
use App\Http\Controllers\back_end\businessController;
use App\Http\Controllers\back_end\caseController;
use App\Http\Controllers\back_end\reviewController;
use App\Http\Controllers\back_end\touchController;



Route::get('/', function () {
    return view('dashboard.dashboard');
})->middleware('loginCheck')->middleware('prevent-back-history');

Route::get('/administrator',[authController::Class,'login_page']);
Route::get('/login', [authController::Class, 'login']);
Route::get('/logout',[authController::Class, 'logout']);
route::post('/chenged_status', [touchController::Class, 'status']);

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
    Route::get('/add',[serviceController::Class, 'add'])->name('add.service')->middleware('prevent-back-history');
    Route::post('/insert',[serviceController::Class, 'insert'])->name('service.insert')->middleware('prevent-back-history');
    Route::get('/service',[serviceController::Class, 'index'])->name('service.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[serviceController::Class, 'edit'])->name('service.edit.page')->middleware('prevent-back-history');
    Route::post('/update',[serviceController::Class, 'update'])->name('service.update')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [serviceController::Class, 'delete'])->name('service.delete')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'business_trends', 'middleware'=>'loginCheck'], function(){
    Route::get('/add', [businessController::Class, 'add'])->name('add.business')->middleware('prevent-back-history');
    Route::post('/insert', [businessController::Class, 'insert'])->name('insert.business')->middleware('prevent-back-history');
    Route::get('/business',[businessController::Class, 'index'])->name('business.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[businessController::Class, 'edit'])->name('business.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [businessController::Class, 'update'])->name('business.update')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [businessController::Class, 'delete'])->name('business.delete')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'legal_case', 'middleware'=>'loginCheck'], function(){
    Route::get('/case', [caseController::Class, 'index'])->name('case.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [caseController::Class, 'edit'])->name('case.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [caseController::Class, 'update'])->name('case.update')->middleware('prevent-back-history');
    Route::get('/add', [caseController::Class, 'add'])->name('new.case')->middleware('prevent-back-history');
    Route::post('/insert',[caseController::Class, 'insert'])->name('insert.case')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [caseController::Class, 'delete'])->name('case.delete')->middleware('prevent-back-history');

});

Route::group(['prefix'=>'client_review', 'middleware'=>'loginCheck'],function(){
    Route::get('/review',[reviewController::Class, 'index'])->name('client.review.content');
    Route::get('/edit/{id}', [reviewController::Class, 'edit'])->name('review.edit.page');
    Route::post('/update',[reviewController::Class, 'update'])->name('review.update');
    Route::get('/delete/{id}', [reviewController::Class, 'delete'])->name('review.delete');
    Route::get('/add', [reviewController::Class, 'add'])->name('new.review');
    Route::post('/insert', [reviewController::Class, 'insert'])->name('insert.review');
});

Route::group(['prefix'=>'get_in_touch', 'middleware'=>'loginCheck'],function(){
    Route::get('/touch',[touchController::Class, 'index'])->name('getintouch.content');
    Route::get('/edit/{id}',[touchController::Class, 'edit'])->name('getintouch.edit');
    Route::post('/update',[touchController::Class, 'update'])->name('getintouch.update');
    Route::get('/add', [touchController::Class, 'add'])->name('new.getintouch');
    Route::post('/insert', [touchController::Class, 'insert'])->name('insert.getintouch');

});

// password reset link = https://www.youtube.com/watch?v=SuIQ20H-hc4
// after login browser back_button = https://www.itsolutionstuff.com/post/laravel-5-how-to-prevent-browser-back-button-after-user-logoutexample.html