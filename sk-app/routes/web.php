<?php

use App\Http\Controllers\aboutPage\partnerController;
use App\Http\Controllers\Client\clientBannerController;
use App\Http\Controllers\Client\clientListController;
use App\Http\Controllers\Client\clientTextController;
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
use App\Http\Controllers\aboutPage\know_aboutus_contentController;
use App\Http\Controllers\community\communityBannerController;
use App\Http\Controllers\community\know_community_controller;
use App\Http\Controllers\Portfolio\bannerPortfolioController;
use App\Http\Controllers\Portfolio\activeController;
use App\Http\Controllers\Portfolio\upcomingPortflioController;


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

Route::group(['prefix'=>'about_page_aboutus_know'], function(){

    Route::get('/know_aboutus',[know_aboutus_contentController::Class, 'index'])->name('know.about.us')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[know_aboutus_contentController::Class, 'edit'])->name('aboutus.know.edit')->middleware('prevent-back-history');
    Route::post('/update',[know_aboutus_contentController::Class, 'update'])->name('know_about_us.update')->middleware('prevent-back-history');
    Route::get('/add', [know_aboutus_contentController::Class, 'add'])->name('new.know_aboutus')->middleware('prevent-back-history');
    Route::post('/insert', [know_aboutus_contentController::Class, 'insert'])->name('insert.know.aboutus')->middleware('prevent-back-history');

    Route::get('/aboutKnow_heading_edit/{id}', [know_aboutus_contentController::Class, 'aboutKnow_heading_edit'])->name('heading.edit.know_about')->middleware('prevent-back-history');
    Route::post('/aboutKnow_headig_update',[know_aboutus_contentController::Class, 'aboutKnow_headig_update'])->name('know_about_us_heading.update')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'community'], function(){

    Route::get('/banner',[communityBannerController::Class, 'index'])->name('comminuty.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[communityBannerController::Class, 'edit'])->name('community.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update',[communityBannerController::Class, 'update'])->name('community_page.banner.update')->middleware('prevent-back-history');
    Route::get('/add', [communityBannerController::Class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');
    Route::post('/insert', [communityBannerController::Class, 'insert'])->name('about_page.banner.insert')->middleware('prevent-back-history');

});


Route::group(['prefix'=>'know_comminuty'], function(){

    Route::get('/know_community',[know_community_controller::Class, 'index'])->name('know.community')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[know_community_controller::Class, 'edit'])->name('community.know.edit')->middleware('prevent-back-history');
    Route::post('/update',[know_community_controller::Class, 'update'])->name('know_about_us.update')->middleware('prevent-back-history');
    Route::get('/add', [know_community_controller::Class, 'add'])->name('new.community')->middleware('prevent-back-history');
    Route::post('/insert', [know_community_controller::Class, 'insert'])->name('insert.know.community')->middleware('prevent-back-history');

    Route::get('/aboutKnow_heading_edit/{id}', [know_community_controller::Class, 'aboutKnow_heading_edit'])->name('heading.edit.know_about')->middleware('prevent-back-history');
    Route::post('/aboutKnow_headig_update',[know_community_controller::Class, 'aboutKnow_headig_update'])->name('know_about_us_heading.update')->middleware('prevent-back-history');
});

Route::group(['prefix'=>'portfolio_page'], function(){

    Route::get('/banner',[bannerPortfolioController::Class, 'index'])->name('portfolio.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[bannerPortfolioController::Class, 'edit'])->name('portfolio.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update',[bannerPortfolioController::Class, 'update'])->name('portfolio.banner.update')->middleware('prevent-back-history');
    //Route::get('/add', [bannerPortfolioController::Class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');
   //Route::post('/insert', [bannerPortfolioController::Class, 'insert'])->name('about_page.banner.insert')->middleware('prevent-back-history');

});

Route::group(['prefix'=>'portfolio_text'], function(){

    Route::get('/portfolio',[bannerPortfolioController::Class, 'portfolio'])->name('portfolio.page.portfolio')->middleware('prevent-back-history');
    Route::get('/portfolio_edit/{id}',[bannerPortfolioController::Class, 'portfolio_text_edit'])->name('portfolio.page.portfolio.edit')->middleware('prevent-back-history');
    Route::post('/update',[bannerPortfolioController::Class, 'portfolio_update'])->name('portfolio.portfolio_text.update')->middleware('prevent-back-history');

    Route::get('/active', [activeController::Class, 'index'])->name('active.portpolio')->middleware('prevent-back-history');
    Route::get('/active_edit/{id}', [activeController::Class, 'active_edit'])->name('active.portfolio.edit')->middleware('prevent-back-history');
    Route::post('/active_update', [activeController::Class, 'active_update'])->name('active.portfolio.update')->middleware('prevent-back-history');
    Route::get('/add', [activeController::Class, 'add'])->name('add.active.portfolio')->middleware('prevent-back-history');
    Route::post('/insert', [activeController::Class, 'insert'])->name('active.portfolio.insert')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [activeController::Class, 'delete'])->name('active.portfolio.delete')->middleware('prevent-back-history');

    Route::get('/upcoming', [upcomingPortflioController::Class, 'index'])->name('upcoming.portpolio')->middleware('prevent-back-history');
    Route::get('/upcoming_edit/{id}', [upcomingPortflioController::Class, 'active_edit'])->name('upcoming.portfolio.edit')->middleware('prevent-back-history');
    Route::post('/upcoming_update', [upcomingPortflioController::Class, 'upcoming_update'])->name('upcoming.portfolio.update')->middleware('prevent-back-history');
    Route::get('/add_upcoming', [upcomingPortflioController::Class, 'add'])->name('add.upcoming.portfolio')->middleware('prevent-back-history');
    Route::post('/insert', [upcomingPortflioController::Class, 'insert'])->name('upcoming.portfolio.insert')->middleware('prevent-back-history');
    Route::get('/upcoming_delete/{id}', [upcomingPortflioController::Class, 'delete'])->name('upcoming.portfolio.delete')->middleware('prevent-back-history');
    

});

Route::group(['prefix'=>'client_page'], function(){

    Route::get('/banner',[clientBannerController::Class, 'index'])->name('client.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[clientBannerController::Class, 'edit'])->name('client.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update',[clientBannerController::Class, 'update'])->name('client_page.banner.update')->middleware('prevent-back-history');
    Route::get('/add', [clientBannerController::Class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');
    Route::post('/insert', [clientBannerController::Class, 'insert'])->name('about_page.banner.insert')->middleware('prevent-back-history');

});

Route::group(['prefix'=>'client_text'], function(){

    Route::get('/text',[clientTextController::Class, 'index'])->name('client.page.text')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[clientTextController::Class, 'edit'])->name('client.page.text.edit')->middleware('prevent-back-history');
    Route::post('/update',[clientTextController::Class, 'update'])->name('client_page.text.update')->middleware('prevent-back-history');
    Route::get('/add', [clientTextController::Class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');
    Route::post('/insert', [clientTextController::Class, 'insert'])->name('about_page.banner.insert')->middleware('prevent-back-history');

});

Route::group(['prefix'=>'client_list'], function(){

    Route::get('/index',[clientListController::Class, 'index'])->name('client.list')->middleware('prevent-back-history');
    Route::get('/edit/{id}',[clientListController::Class, 'edit'])->name('client.list.edit')->middleware('prevent-back-history');
    Route::post('/update',[clientListController::Class, 'update'])->name('client.list.update')->middleware('prevent-back-history');
    Route::get('/add', [clientListController::Class, 'add'])->name('add.client.client_list')->middleware('prevent-back-history');
    Route::post('/insert', [clientListController::Class, 'insert'])->name('new.client.insert')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [clientListController::Class, 'delete'])->name('client.list.delete')->middleware('prevent-back-history');

});






// password reset link = https://www.youtube.com/watch?v=SuIQ20H-hc4  
// after login browser back_button = https://www.itsolutionstuff.com/post/laravel-5-how-to-prevent-browser-back-button-after-user-logoutexample.html
// background set = style="background-image:url({{asset('images/about/'.$val->image)}}); background-size:cover; background-position:center"