<?php

namespace App\Http\Controllers\Front_end\Community;

use App\Http\Controllers\Controller;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\touchModel;
use App\Models\community\AboutOfCommunityModel;
use App\Models\community\communityBannerModel;
use App\Models\community\know_community_model;
use App\Models\Meta\communityMetaModel;
use Illuminate\Http\Request;
use App\Models\back_end\ftr_right_model;

class communityController extends Controller
{
    public function index()
    {
        $left_f = ftr_left_Model::limit(4)->get();
        $right_f = ftr_right_model::limit(4)->get();
        $banner = communityBannerModel::orderby('id','desc')->limit(1)->get();
        $know = know_community_model::orderby('id','desc')->limit(2)->get();
        $aboutOfCommunity = AboutOfCommunityModel::orderby('id','desc')->limit(1)->get();
        $title_data = communityMetaModel::limit(1)->get();
        $contact_data = touchModel::where('status', 'active')->get();
        return view('Front_end.Community.community', [
            'footer_left' => $left_f,
            'footer_right' => $right_f,
            'banner'=>$banner,
            'know'=>$know,
            'aboutOfCommunity'=>$aboutOfCommunity,
            'title_data'=>$title_data,
            'contact_data'=>$contact_data,
        ]);
    }
}