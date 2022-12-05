<?php

namespace App\Http\Controllers\Front_end\Home;

use App\Http\Controllers\Controller;
use App\Models\back_end\aboutUsModel;
use App\Models\back_end\businessModel;
use App\Models\back_end\business_overview_model;
use App\Models\back_end\caseModel;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\ftr_right_model;
use App\Models\back_end\newsModel;
use App\Models\back_end\reviewModel;
use App\Models\back_end\serviceModel;
use App\Models\back_end\service_right_section;
use App\Models\front_end\Home\homeBannerModel;
use App\Models\front_end\contact\contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $banner = homeBannerModel::limit(1)->get();
        $aboutus = aboutUsModel::limit(1)->get();
        $service = serviceModel::limit(1)->get();
        $service_r = service_right_section::all();
        $busness = businessModel::limit(1)->get();
        $static = business_overview_model::limit(1)->get();
        $review = reviewModel::all();
        $news = newsModel::limit(3)->get();
        $left_f = ftr_left_Model::limit(4)->get();
        $right_f = ftr_right_model::limit(4)->get();
        $case = caseModel::orderby('id','desc')->limit(6)->get();
        return view('front_end.HomePage.home',[
            'banner'=>$banner,
            'aboutus'=>$aboutus,
            'service'=>$service,
            'service_r'=>$service_r,
            'business' => $busness,
            'static'=>$static,
            'review'=>$review,
            'news'=>$news,
            'footer_left'=>$left_f,
            'footer_right'=>$right_f,
            'case'=>$case

        ]);
    }

    public function contact(Request $req){
        $result = contact::insert([
            'name'=>$req->name,
            'phone'=>$req->phone,
            'email'=>$req->email,
            'message'=>$req->message
        ]);
        \Mail::send('front_end.contact.welcome',['body'=>"Welcome"],function($message) use ($req){
            $message->from('noreply@example.com', 'Sk-associates');
            $message->to($req->email,'Your name')->subject('Tech-ICS');
        });
        return back()->withInput();
    }
}
