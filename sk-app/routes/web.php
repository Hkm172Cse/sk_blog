<?php

use App\Http\Controllers\aboutPage\partnerController;
use App\Http\Controllers\checkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\back_end\banner_controller;
use App\Http\Controllers\back_end\aboutUsController;
use App\Http\Controllers\back_end\serviceController;
use App\Http\Controllers\back_end\businessController;
use App\Http\Controllers\back_end\caseController;
use App\Http\Controllers\back_end\reviewController;
use App\Http\Controllers\back_end\touchController;
use App\Http\Controllers\back_end\ftr_leftController;
use App\Http\Controllers\back_end\ftr_rightController;
use App\Http\Controllers\back_end\business_overview_controller;
use App\Http\Controllers\back_end\newsController;
use App\Http\Controllers\back_end\footerController;
use App\Http\Controllers\aboutPage\aboutBannerController;
use App\Http\Controllers\aboutPage\about_us_controller;



Route::get('/', function () {
    return view('dashboard.dashboard');
})->middleware('loginCheck')->middleware('prevent-back-history');

/*
Route::get('/abc', function(){
    return view('check');
});


// Route::post('/check', [checkController::Class, 'insertOne']);
// Route::post('/check_up', [checkController::Class, 'updateOne']);
// Route::get('/getImage', [checkController::Class, 'getImage']);

*/



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
    Route::get('/review',[reviewController::Class, 'index'])->name('client.review.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [reviewController::Class, 'edit'])->name('review.edit.page')->middleware('prevent-back-history');
    Route::post('/update',[reviewController::Class, 'update'])->name('review.update')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [reviewController::Class, 'delete'])->name('review.delete')->middleware('prevent-back-history');
    Route::get('/add', [reviewController::Class, 'add'])->name('new.review')->middleware('prevent-back-history');
    Route::post('/insert', [reviewController::Class, 'insert'])->name('insert.review')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'get_in_touch', 'middleware'=>'loginCheck'],function(){
    Route::get('/touch',[touchController::Class, 'index'])->name('getintouch.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[touchController::Class, 'edit'])->name('getintouch.edit')->middleware('prevent-back-history');
    Route::post('/update',[touchController::Class, 'update'])->name('getintouch.update')->middleware('prevent-back-history');
    Route::get('/add', [touchController::Class, 'add'])->name('new.getintouch')->middleware('prevent-back-history');
    Route::post('/insert', [touchController::Class, 'insert'])->name('insert.getintouch')->middleware('prevent-back-history');

});

Route::group(['prefix'=>'left_footer','middleware'=>'loginCheck'], function(){
    //Route::get('/left', [ftr_leftController::Class, 'index'])->name('left.footer.link')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [ftr_leftController::Class, 'edit'])->name('left_footer.edit')->middleware('prevent-back-history');
    Route::post('/update', [ftr_leftController::Class, 'update'])->name('left_footer.update')->middleware('prevent-back-history');
    Route::get('/add', [ftr_leftController::Class, 'add'])->name('new.left_footer')->middleware('prevent-back-history');
    Route::post('/insert',[ftr_leftController::Class, 'insert'])->name('insert.left_footer')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [ftr_leftController::Class, 'delete'])->name('left_footer.delete')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'right_footer','middleware'=>'loginCheck'], function(){
    //Route::get('/right', [ftr_rightController::Class, 'index'])->name('right.footer.link')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [ftr_rightController::Class, 'edit'])->name('right_footer.edit')->middleware('prevent-back-history');
    Route::post('/update', [ftr_rightController::Class, 'update'])->name('right_footer.update')->middleware('prevent-back-history');
    Route::get('/add', [ftr_rightController::Class, 'add'])->name('new.right_footer')->middleware('prevent-back-history');
    Route::post('/insert',[ftr_rightController::Class, 'insert'])->name('insert.right_footer')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [ftr_rightController::Class, 'delete'])->name('right_footer.delete')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'footer', 'middleware'=>'loginCheck'], function(){
    Route::get('/footer_links', [footerController::Class, 'index'])->name('foote.user.links');
});


Route::group(['prefix'=>'business_overview','middleware'=>'loginCheck'], function(){
    Route::get('/business_overview', [business_overview_controller::Class, 'index'])->name('business.overview')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [business_overview_controller::Class, 'edit'])->name('business_overview.edit')->middleware('prevent-back-history');
    Route::post('/update', [business_overview_controller::Class, 'update'])->name('business_overview.update')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'news','middleware'=>'loginCheck'], function(){
    Route::get('/news', [newsController::Class, 'index'])->name('news.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [newsController::Class, 'edit'])->name('news.edit')->middleware('prevent-back-history');
    Route::post('/update', [newsController::Class, 'update'])->name('news.update')->middleware('prevent-back-history');
    Route::get('/add', [newsController::Class, 'add'])->name('new_news')->middleware('prevent-back-history');
    Route::post('/insert',[newsController::Class, 'insert'])->name('insert.news')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [newsController::Class, 'delete'])->name('news.delete')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'about_page'], function(){

    Route::get('/banner',[aboutBannerController::Class, 'index'])->name('about.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[aboutBannerController::Class, 'edit'])->name('about.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update',[aboutBannerController::Class, 'update'])->name('about_page.banner.update')->middleware('prevent-back-history');
    Route::get('/add', [aboutBannerController::Class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');
    Route::post('/insert', [aboutBannerController::Class, 'insert'])->name('about_page.banner.insert')->middleware('prevent-back-history');

});

Route::group(['prefix'=>'about_page_partner'], function(){

    Route::get('/partner',[partnerController::Class, 'index'])->name('about.page.partner')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[partnerController::Class, 'edit'])->name('partner.logo.edit')->middleware('prevent-back-history');
    Route::post('/update',[partnerController::Class, 'update'])->name('partner.logo.update')->middleware('prevent-back-history');
    Route::get('/add', [partnerController::Class, 'add'])->name('partner.logo.add')->middleware('prevent-back-history');
    Route::post('/insert', [partnerController::Class, 'insert'])->name('partner.logo.insert')->middleware('prevent-back-history');

    Route::get('/partner_edit/{id}', [partnerController::Class, 'partner_edit'])->name('partner.edit')->middleware('prevent-back-history');
    Route::post('/partner_update',[partnerController::Class, 'partner_update'])->name('partner.update')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'about_page_about_us'], function(){

    Route::get('/about_us',[about_us_controller::Class, 'index'])->name('about.about_us')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[about_us_controller::Class, 'edit'])->name('about_page.aboutus_image.edit')->middleware('prevent-back-history');
    Route::post('/update',[about_us_controller::Class, 'update'])->name('about_page.aboutus.image.update')->middleware('prevent-back-history');
    // Route::get('/add', [partnerController::Class, 'add'])->name('partner.logo.add')->middleware('prevent-back-history');
    // Route::post('/insert', [partnerController::Class, 'insert'])->name('partner.logo.insert')->middleware('prevent-back-history');

    // Route::get('/partner_edit/{id}', [partnerController::Class, 'partner_edit'])->name('partner.edit')->middleware('prevent-back-history');
    // Route::post('/partner_update',[partnerController::Class, 'partner_update'])->name('partner.update')->middleware('prevent-back-history');
});





// password reset link = https://www.youtube.com/watch?v=SuIQ20H-hc4
// after login browser back_button = https://www.itsolutionstuff.com/post/laravel-5-how-to-prevent-browser-back-button-after-user-logoutexample.html