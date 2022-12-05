<?php

namespace App\Http\Controllers\community;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\community\AboutOfCommunityModel;

class AboutOfCommunityController extends Controller
{
    public function index(){
        $data = AboutOfCommunityModel::all();
        return view('back_end.Community.aboutOfCommunity.aboutOfCommunity', ['data'=>$data]);
    }

    public function edit($id){
        $data = AboutOfCommunityModel::where('id', $id)->get();
        return view('back_end.Community.aboutOfCommunity.editAboutOfCommunity', ['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->input('edit_id');
        $result = AboutOfCommunityModel::where('id','=',$id)->update([
            'name'=>$req->name,
            'title'=>$req->title,
            'des'=>$req->des
        ]);
        if($result){
            return redirect(route('about.of.community'))->with('update','updated successfully');
        }
        return redirect(route('about.of.community'))->with('update','Data not changed');
    }
}
