<?php

namespace App\Http\Controllers\Front_end\team;

use App\Http\Controllers\Controller;
use App\Models\aboutPage\partnerModel;
use App\Models\aboutPage\partnerTitleModel;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\ftr_right_model;
use App\Models\team\staffModel;
use App\Models\team\teamBannerModel;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function index(){
        $left_f = ftr_left_Model::limit(4)->get();
        $right_f = ftr_right_model::limit(4)->get();
        $staff = staffModel::orderby('id','desc')->limit(6)->get();
        $banner = teamBannerModel::orderby('id','desc')->limit(1)->get();
        $partnerTitle = partnerTitleModel::orderby('id','desc')->limit(1)->get();
        $logo = partnerModel::orderby('id','desc')->limit(8)->get();
        return view('front_end.Team.team',[
            'footer_left'=>$left_f,
            'footer_right'=>$right_f,
            'banner'=>$banner,
            'staff'=>$staff,
            'partinerTitle'=>$partnerTitle,
            'logo'=>$logo,
        ]);
    }
}
