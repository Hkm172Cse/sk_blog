<?php

use App\Http\Controllers\aboutPage\partnerController;
use App\Http\Controllers\Client\clientBannerController;
use App\Http\Controllers\Client\clientListController;
use App\Http\Controllers\Client\clientTextController;
use App\Http\Controllers\community\AboutOfCommunityController;
use App\Http\Controllers\Front_end\Client\clientController;
use App\Http\Controllers\Front_end\Community\communityController;
use App\Http\Controllers\Front_end\Home\HomeController;
use App\Http\Controllers\Front_end\Portfolio\portfolioController;
use App\Http\Controllers\Front_end\team\teamController;
use App\Http\Controllers\team\staffController;
use App\Http\Controllers\team\teamBannerController;
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


Route::get('/',[authController::Class,'dashboard'])->middleware('loginCheck')->middleware('prevent-back-history');


Route::get('/administrator', [authController::class, 'login_page']);
Route::get('/login', [authController::class, 'login']);
Route::get('/logout', [authController::class, 'logout']);
route::post('/chenged_status', [touchController::class, 'status']);

Route::get('/forgot-password', [authController::class, 'forgotPpassword']);
Route::post('/forgotpassword', [authController::class, 'handleSubmition']);
Route::get('/password/reset/{token}', [authController::class, 'showResetForm'])->name('user.reset.password');
Route::get('/submit_reset', [authController::class, 'resetPassword'])->name('user.reset.password.page');

Route::group(['prefix' => 'banner', 'middleware' => 'loginCheck'], function () {
    Route::get('banner_data', [banner_controller::class, 'index'])->name('banner_content')->middleware('prevent-back-history');
    Route::get('/get_content', [banner_controller::class, 'getBannerInfo'])->name('banner_get')->middleware('prevent-back-history');
    Route::get('/add', [banner_controller::class, 'newInsertion'])->name('new_banner')->middleware('prevent-back-history');
    Route::post('/insert', [banner_controller::class, 'insert_banner'])->name('insert_banner')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [banner_controller::class, 'banner_del'])->name('banner_delete')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [banner_controller::class, 'edit_page'])->name('banner.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [banner_controller::class, 'edit_submit'])->name('edit_submit')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'about_us', 'middleware' => 'loginCheck'], function () {
    Route::get('/about_us', [aboutUsController::class, 'index'])->name('about.us.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [aboutUsController::class, 'eidt'])->name('about_us.edit')->middleware('prevent-back-history');
    Route::post('/update', [aboutUsController::class, 'update'])->name('about_us_edit')->middleware('prevent-back-history');
    Route::get('/insert', [aboutUsController::class, 'insert_page'])->name('insert.about_us')->middleware('prevent-back-history');
    Route::post('/new_insert', [aboutUsController::class, 'newInsert'])->name('new.about_us')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [aboutUsController::class, 'delete'])->name('about_us.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'service', 'middleware' => 'loginCheck'], function () {
    Route::get('/add', [serviceController::class, 'add'])->name('add.service')->middleware('prevent-back-history');
    Route::post('/insert', [serviceController::class, 'insert'])->name('service.insert')->middleware('prevent-back-history');
    Route::get('/service', [serviceController::class, 'index'])->name('service.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [serviceController::class, 'edit'])->name('service.edit.page')->middleware('prevent-back-history');
    Route::get('/r_edit/{id}', [serviceController::class, 'r_edit'])->name('service.edit.r_page')->middleware('prevent-back-history');
    Route::post('/update', [serviceController::class, 'update'])->name('service.update')->middleware('prevent-back-history');
    Route::post('/r_update', [serviceController::class, 'r_update'])->name('r_service.update')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [serviceController::class, 'delete'])->name('service.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'business_trends', 'middleware' => 'loginCheck'], function () {
    Route::get('/add', [businessController::class, 'add'])->name('add.business')->middleware('prevent-back-history');
    Route::post('/insert', [businessController::class, 'insert'])->name('insert.business')->middleware('prevent-back-history');
    Route::get('/business', [businessController::class, 'index'])->name('business.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [businessController::class, 'edit'])->name('business.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [businessController::class, 'update'])->name('business.update')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [businessController::class, 'delete'])->name('business.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'legal_case', 'middleware' => 'loginCheck'], function () {
    Route::get('/case', [caseController::class, 'index'])->name('case.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [caseController::class, 'edit'])->name('case.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [caseController::class, 'update'])->name('case.update')->middleware('prevent-back-history');
    Route::get('/add', [caseController::class, 'add'])->name('new.case')->middleware('prevent-back-history');
    Route::post('/insert', [caseController::class, 'insert'])->name('insert.case')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [caseController::class, 'delete'])->name('case.delete')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'client_review', 'middleware' => 'loginCheck'], function () {
    Route::get('/review', [reviewController::class, 'index'])->name('client.review.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [reviewController::class, 'edit'])->name('review.edit.page')->middleware('prevent-back-history');
    Route::post('/update', [reviewController::class, 'update'])->name('review.update')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [reviewController::class, 'delete'])->name('review.delete')->middleware('prevent-back-history');
    Route::get('/add', [reviewController::class, 'add'])->name('new.review')->middleware('prevent-back-history');
    Route::post('/insert', [reviewController::class, 'insert'])->name('insert.review')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'get_in_touch', 'middleware' => 'loginCheck'], function () {
    Route::get('/touch', [touchController::class, 'index'])->name('getintouch.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [touchController::class, 'edit'])->name('getintouch.edit')->middleware('prevent-back-history');
    Route::post('/update', [touchController::class, 'update'])->name('getintouch.update')->middleware('prevent-back-history');
    Route::get('/add', [touchController::class, 'add'])->name('new.getintouch')->middleware('prevent-back-history');
    Route::post('/insert', [touchController::class, 'insert'])->name('insert.getintouch')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'left_footer', 'middleware' => 'loginCheck'], function () {
    //Route::get('/left', [ftr_leftController::Class, 'index'])->name('left.footer.link')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [ftr_leftController::class, 'edit'])->name('left_footer.edit')->middleware('prevent-back-history');
    Route::post('/update', [ftr_leftController::class, 'update'])->name('left_footer.update')->middleware('prevent-back-history');
    Route::get('/add', [ftr_leftController::class, 'add'])->name('new.left_footer')->middleware('prevent-back-history');
    Route::post('/insert', [ftr_leftController::class, 'insert'])->name('insert.left_footer')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [ftr_leftController::class, 'delete'])->name('left_footer.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'right_footer', 'middleware' => 'loginCheck'], function () {
    //Route::get('/right', [ftr_rightController::Class, 'index'])->name('right.footer.link')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [ftr_rightController::class, 'edit'])->name('right_footer.edit')->middleware('prevent-back-history');
    Route::post('/update', [ftr_rightController::class, 'update'])->name('right_footer.update')->middleware('prevent-back-history');
    Route::get('/add', [ftr_rightController::class, 'add'])->name('new.right_footer')->middleware('prevent-back-history');
    Route::post('/insert', [ftr_rightController::class, 'insert'])->name('insert.right_footer')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [ftr_rightController::class, 'delete'])->name('right_footer.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'footer', 'middleware' => 'loginCheck'], function () {
    Route::get('/footer_links', [footerController::class, 'index'])->name('foote.user.links');
});


Route::group(['prefix' => 'business_overview', 'middleware' => 'loginCheck'], function () {
    Route::get('/business_overview', [business_overview_controller::class, 'index'])->name('business.overview')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [business_overview_controller::class, 'edit'])->name('business_overview.edit')->middleware('prevent-back-history');
    Route::post('/update', [business_overview_controller::class, 'update'])->name('business_overview.update')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'news', 'middleware' => 'loginCheck'], function () {
    Route::get('/news', [newsController::class, 'index'])->name('news.content')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [newsController::class, 'edit'])->name('news.edit')->middleware('prevent-back-history');
    Route::post('/update', [newsController::class, 'update'])->name('news.update')->middleware('prevent-back-history');
    Route::get('/add', [newsController::class, 'add'])->name('new_news')->middleware('prevent-back-history');
    Route::post('/insert', [newsController::class, 'insert'])->name('insert.news')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [newsController::class, 'delete'])->name('news.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'about_page'], function () {

    Route::get('/banner', [aboutBannerController::class, 'index'])->name('about.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [aboutBannerController::class, 'edit'])->name('about.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update', [aboutBannerController::class, 'update'])->name('about_page.banner.update')->middleware('prevent-back-history');
    Route::get('/add', [aboutBannerController::class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');
    Route::post('/insert', [aboutBannerController::class, 'insert'])->name('about_page.banner.insert')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'about_page_partner'], function () {

    Route::get('/partner', [partnerController::class, 'index'])->name('about.page.partner')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [partnerController::class, 'edit'])->name('partner.logo.edit')->middleware('prevent-back-history');
    Route::post('/update', [partnerController::class, 'update'])->name('partner.logo.update')->middleware('prevent-back-history');
    Route::get('/add', [partnerController::class, 'add'])->name('partner.logo.add')->middleware('prevent-back-history');
    Route::post('/insert', [partnerController::class, 'insert'])->name('partner.logo.insert')->middleware('prevent-back-history');

    Route::get('/partner_edit/{id}', [partnerController::class, 'partner_edit'])->name('partner.edit')->middleware('prevent-back-history');
    Route::post('/partner_update', [partnerController::class, 'partner_update'])->name('partner.update')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'about_page_about_us'], function () {

    Route::get('/about_us', [about_us_controller::class, 'index'])->name('about.about_us')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [about_us_controller::class, 'edit'])->name('about_page.aboutus_image.edit')->middleware('prevent-back-history');
    Route::post('/update', [about_us_controller::class, 'update'])->name('about_page.aboutus.image.update')->middleware('prevent-back-history');

    Route::get('/text_edit/{id}', [about_us_controller::class, 'text_edit'])->name('about_page.aboutus_text.edit')->middleware('prevent-back-history');
    Route::post('/text_update', [about_us_controller::class, 'text_update'])->name('aboutus.text.update')->middleware('prevent-back-history');

    //aboutus.text.update
    // Route::get('/add', [partnerController::Class, 'add'])->name('partner.logo.add')->middleware('prevent-back-history');
    // Route::post('/insert', [partnerController::Class, 'insert'])->name('partner.logo.insert')->middleware('prevent-back-history');

    // Route::get('/partner_edit/{id}', [partnerController::Class, 'partner_edit'])->name('partner.edit')->middleware('prevent-back-history');
    // Route::post('/partner_update',[partnerController::Class, 'partner_update'])->name('partner.update')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'about_page_aboutus_know'], function () {

    Route::get('/know_aboutus', [know_aboutus_contentController::class, 'index'])->name('know.about.us')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [know_aboutus_contentController::class, 'edit'])->name('aboutus.know.edit')->middleware('prevent-back-history');
    Route::post('/update', [know_aboutus_contentController::class, 'update'])->name('know_about_us.update')->middleware('prevent-back-history');
    Route::get('/add', [know_aboutus_contentController::class, 'add'])->name('new.know_aboutus')->middleware('prevent-back-history');
    Route::post('/insert', [know_aboutus_contentController::class, 'insert'])->name('insert.know.aboutus')->middleware('prevent-back-history');

    Route::get('/aboutKnow_heading_edit/{id}', [know_aboutus_contentController::class, 'aboutKnow_heading_edit'])->name('heading.edit.know_about')->middleware('prevent-back-history');
    Route::post('/aboutKnow_headig_update', [know_aboutus_contentController::class, 'tech_ics'])->name('know_about_us_heading.update')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'community'], function () {

    Route::get('/banner', [communityBannerController::class, 'index'])->name('comminuty.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [communityBannerController::class, 'edit'])->name('community.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update', [communityBannerController::class, 'update'])->name('community_page.banner.update')->middleware('prevent-back-history');
    //Route::get('/add', [communityBannerController::class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'about_community', 'middleware' => 'loginCheck'], function () {
    Route::get('/about', [AboutOfCommunityController::class, 'index'])->name('about.of.community');
    Route::get('/edit/{id}', [AboutOfCommunityController::class, 'edit'])->name('aboutOfCommunity.edit');
    Route::post('/update', [AboutOfCommunityController::class, 'update'])->name('aboutOfCommunity.update');
});


Route::group(['prefix' => 'know_comminuty'], function () {

    Route::get('/know_community', [know_community_controller::class, 'index'])->name('know.community')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [know_community_controller::class, 'edit'])->name('community.know.edit')->middleware('prevent-back-history');
    Route::post('/update', [know_community_controller::class, 'update'])->name('know_community.about_us.update')->middleware('prevent-back-history');
    Route::get('/add', [know_community_controller::class, 'add'])->name('new.community')->middleware('prevent-back-history');
    Route::post('/insert', [know_community_controller::class, 'insert'])->name('insert.know.community')->middleware('prevent-back-history');

    Route::get('/aboutKnow_heading_edit/{id}', [know_community_controller::class, 'aboutKnow_heading_edit'])->name('')->middleware('prevent-back-history');
    Route::post('/aboutKnow_headig_update', [know_community_controller::class, 'aboutKnow_headig_update'])->name('know_community_heading.update')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'portfolio_page'], function () {

    Route::get('/banner', [bannerPortfolioController::class, 'index'])->name('portfolio.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [bannerPortfolioController::class, 'edit'])->name('portfolio.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update', [bannerPortfolioController::class, 'update'])->name('portfolio.banner.update')->middleware('prevent-back-history');
    

});

Route::group(['prefix' => 'portfolio_text'], function () {

    Route::get('/portfolio', [bannerPortfolioController::class, 'portfolio'])->name('portfolio.page.portfolio')->middleware('prevent-back-history');
    Route::get('/portfolio_edit/{id}', [bannerPortfolioController::class, 'portfolio_text_edit'])->name('portfolio.page.portfolio.edit')->middleware('prevent-back-history');
    Route::post('/update', [bannerPortfolioController::class, 'portfolio_update'])->name('portfolio.portfolio_text.update')->middleware('prevent-back-history');

    Route::get('/active', [activeController::class, 'index'])->name('active.portpolio')->middleware('prevent-back-history');
    Route::get('/active_edit/{id}', [activeController::class, 'active_edit'])->name('active.portfolio.edit')->middleware('prevent-back-history');
    Route::post('/active_update', [activeController::class, 'active_update'])->name('active.portfolio.update')->middleware('prevent-back-history');
    Route::get('/add', [activeController::class, 'add'])->name('add.active.portfolio')->middleware('prevent-back-history');
    Route::post('/insert', [activeController::class, 'insert'])->name('active.portfolio.insert')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [activeController::class, 'delete'])->name('active.portfolio.delete')->middleware('prevent-back-history');

    Route::get('/upcoming', [upcomingPortflioController::class, 'index'])->name('upcoming.portpolio')->middleware('prevent-back-history');
    Route::get('/upcoming_edit/{id}', [upcomingPortflioController::class, 'active_edit'])->name('upcoming.portfolio.edit')->middleware('prevent-back-history');
    Route::post('/upcoming_update', [upcomingPortflioController::class, 'upcoming_update'])->name('upcoming.portfolio.update')->middleware('prevent-back-history');
    Route::get('/add_upcoming', [upcomingPortflioController::class, 'add'])->name('add.upcoming.portfolio')->middleware('prevent-back-history');
    Route::post('/insert', [upcomingPortflioController::class, 'insert'])->name('upcoming.portfolio.insert')->middleware('prevent-back-history');
    Route::get('/upcoming_delete/{id}', [upcomingPortflioController::class, 'delete'])->name('upcoming.portfolio.delete')->middleware('prevent-back-history');
});

Route::group(['prefix' => 'client_page'], function () {

    Route::get('/banner', [clientBannerController::class, 'index'])->name('client.page.banner')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [clientBannerController::class, 'edit'])->name('client.page.banner.edit')->middleware('prevent-back-history');
    Route::post('/update', [clientBannerController::class, 'update'])->name('client_page.banner.update')->middleware('prevent-back-history');
    Route::get('/add', [clientBannerController::class, 'add'])->name('add.client.banner')->middleware('prevent-back-history');
    Route::post('/insert', [clientBannerController::class, 'insert'])->name('client.page.banner.insert')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'client_text'], function () {

    Route::get('/text', [clientTextController::class, 'index'])->name('client.page.text')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [clientTextController::class, 'edit'])->name('client.page.text.edit')->middleware('prevent-back-history');
    Route::post('/update', [clientTextController::class, 'update'])->name('client_page.text.update')->middleware('prevent-back-history');
    //Route::get('/add', [clientTextController::class, 'add'])->name('add.about_Page.banner')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'client_list'], function () {

    Route::get('/index', [clientListController::class, 'index'])->name('client.list')->middleware('prevent-back-history');
    Route::get('/edit/{id}', [clientListController::class, 'edit'])->name('client.list.edit')->middleware('prevent-back-history');
    Route::post('/update', [clientListController::class, 'update'])->name('client.list.update')->middleware('prevent-back-history');
    Route::get('/add', [clientListController::class, 'add'])->name('add.client.client_list')->middleware('prevent-back-history');
    Route::post('/insert', [clientListController::class, 'insert'])->name('new.client.insert')->middleware('prevent-back-history');
    Route::get('/delete/{id}', [clientListController::class, 'delete'])->name('client.list.delete')->middleware('prevent-back-history');

});

Route::group(['prefix' => 'team'], function () {

    Route::get('/index', [staffController::class, 'index'])->name('team.page.staff')->middleware('prevent-back-history');
    Route::get('/staff_edit/{id}', [staffController::class, 'edit'])->name('staff.edit')->middleware('prevent-back-history');
    Route::post('/staff_update', [staffController::class, 'update'])->name('staff.update')->middleware('prevent-back-history');
    Route::get('/add_staff', [staffController::class, 'add'])->name('add.new.staff')->middleware('prevent-back-history');
    Route::post('/staff_insert', [staffController::Class, 'insert'])->name('new.staff.insert')->middleware('prevent-back-history');
    //Route::get('/delete/{id}', [clientListController::Class, 'delete'])->name('client.list.delete')->middleware('prevent-back-history');

    Route::get('/banner', [teamBannerController::class, 'index'])->name('team.banner');
    Route::get('/edit/{id}', [teamBannerController::class, 'edit'])->name('team.banner.edit');
    Route::post('/update', [teamBannerController::class, 'update'])->name('team.banner.update');

});

// WEBSITE ROUTES

Route::group(['prefix' => 'tech_ics'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('homepage');
    Route::get('/aboutus', [\App\Http\Controllers\Front_end\AboutUs\aboutusController::class, 'index'])->name('aboutus');
    Route::get('/community', [communityController::class, 'index'])->name('community.page');
    Route::get('/portfolio', [portfolioController::class, 'index'])->name('website.portfolio');
    Route::get('/client', [clientController::class, 'index'])->name('website.client');
    Route::get('/our_team', [teamController::class, 'index'])->name('website.our_team');
});

Route::post('/contact', [HomeController::Class, 'contact'])->name('get.in.touch');






// password reset link = https://www.youtube.com/watch?v=SuIQ20H-hc4  
// after login browser back_button = https://www.itsolutionstuff.com/post/laravel-5-how-to-prevent-browser-back-button-after-user-logoutexample.html
// background set = style="background-image:url({{asset('images/about/'.$val->image)}}); background-size:cover; background-position:center"