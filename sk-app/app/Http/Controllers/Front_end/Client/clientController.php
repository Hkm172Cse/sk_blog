<?php

namespace App\Http\Controllers\Front_end\Client;

use App\Http\Controllers\Controller;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\ftr_right_model;
use App\Models\Client\clientBannerModel;
use App\Models\Client\clientListModel;
use App\Models\Client\clientTextModel;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index(){
        $left_f = ftr_left_Model::limit(4)->get();
        $right_f = ftr_right_model::limit(4)->get();
        $banner = clientBannerModel::orderby('id','desc')->limit(1)->get();
        $text = clientTextModel::orderby('id','desc')->limit(1)->get();
        $list = clientListModel::orderby('id','desc')->get();
        return view('front_end.Client.client',[
            'footer_left'=>$left_f,
            'footer_right'=>$right_f,
            'banner'=>$banner,
            'text'=>$text,
            'list'=>$list
        ]);
    }
}
