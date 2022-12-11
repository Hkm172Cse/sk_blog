<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use App\Models\front_end\contact\contact;
use Illuminate\Http\Request;

class userInfoController extends Controller
{
    public function index(){
        $data = contact::all();
        return view('back_end.UserInfo.UserInfo',['data'=>$data]);
    }
}
