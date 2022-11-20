<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\footerModel;
use App\Models\back_end\ftr_left_Model;
use App\Models\back_end\ftr_right_model;

class footerController extends Controller
{
    public function index(){
        $left_links = ftr_left_Model::all();
        $right_links = ftr_right_model::all();
        return view('back_end.footer.footer_links',['left_links'=>$left_links, 'right_links'=>$right_links]);
    }
}
