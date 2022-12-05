<?php

namespace App\Http\Controllers\Front_end\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\ftr_right_model;
use App\Models\portfolio\activeModel;
use App\Models\portfolio\portfolioBannerModel;
use App\Models\portfolio\portfolioTextModel;
use App\Models\portfolio\upcomingPortfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        $left_f = ftr_left_Model::limit(4)->get();
        $right_f = ftr_right_model::limit(4)->get();
        $banner = portfolioBannerModel::orderby('id','desc')->limit(1)->get();
        $text = portfolioTextModel::orderby('id','desc')->limit(1)->get();
        $active = activeModel::orderby('id','desc')->limit(4)->get();
        $upcomming = upcomingPortfolio::orderby('id','desc')->limit(4)->get();
        return view('front_end.Portfolio.portfolio',[
            
            'footer_left'=>$left_f,
            'footer_right'=>$right_f,
            'banner'=>$banner,
            'text'=>$text,
            'active'=>$active,
            'upcomming'=>$upcomming
        ]);
    }
}
