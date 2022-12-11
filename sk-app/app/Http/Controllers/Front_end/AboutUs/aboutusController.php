<?php

namespace App\Http\Controllers\Front_end\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\aboutPage\aboutBannerModel;
use App\Models\aboutPage\aboutUsModel;
use App\Models\aboutPage\aboutUsTextModel;
use App\Models\aboutPage\know_aboutus_content;
use App\Models\aboutPage\know_about_heading_model;
use App\Models\aboutPage\partnerModel;
use App\Models\aboutPage\partnerTitleModel;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\ftr_right_model;
use App\Models\back_end\reviewModel;
use App\Models\back_end\touchModel;
use App\Models\Meta\aboutusMetaModel;
use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function index(){
        $left_f = ftr_left_Model::limit(4)->get();
        $right_f = ftr_right_model::limit(4)->get();
        $banner = aboutBannerModel::orderby('id','desc')->limit(1)->get();
        $aboutUsImg = aboutUsModel::orderby('id','desc')->limit(3)->get();
        $aboutusText = aboutUsTextModel::orderby('id','desc')->limit(1)->get();
        $partnerTitle = partnerTitleModel::orderby('id','desc')->limit(1)->get();
        $logo = partnerModel::orderby('id','desc')->limit(8)->get();
        $know_heading = know_about_heading_model::orderby('id','desc')->limit(1)->get();
        $review = reviewModel::all();
        $aboutContent = know_aboutus_content::orderby('id','desc')->limit(4)->get();
        $title_data = aboutusMetaModel::limit(1)->get();
        $contact_data = touchModel::where('status', 'active')->get();
        return view('front_end.AboutUsPage.aboutus', [
            'footer_left'=>$left_f,
            'footer_right'=>$right_f,
            'banner'=>$banner,
            'aboutusimg'=>$aboutUsImg,
            'aboutUsText'=>$aboutusText,
            'partinerTitle'=>$partnerTitle,
            'logo'=>$logo,
            'review'=>$review,
            'know_heading'=>$know_heading,
            'aboutContent'=>$aboutContent,
            'title_data'=>$title_data,
            'contact_data'=>$contact_data,

        ]);
    }
}
