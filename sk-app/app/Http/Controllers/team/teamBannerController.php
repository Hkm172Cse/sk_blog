<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use App\Models\team\teamBannerModel;
use Illuminate\Http\Request;

class teamBannerController extends Controller
{
    public function index(){
        $data = teamBannerModel::all();
        return view('back_end.team.banner.banner',['data'=>$data]);
    }
    public function edit($id){
        $data = teamBannerModel::where('id',$id)->get();
        return view('back_end.team.banner.edit_banner',['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->input('edit_id');
        if($req->image==null){
            $result = teamBannerModel::where('id',$id)->update([
                'name'=>$req->name,
                'title'=>$req->title,
                'button'=>$req->button
            ]);
            if($result){
                return redirect(route('team.banner'))->with('update','updated Successfully');
            }else{
                return redirect(route('team.banner'))->with('update','Data not changed'); 
            }
        }
        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/team'),$newImage);

        $result = teamBannerModel::where('id',$id)->update([
            'name'=>$req->name,
            'title'=>$req->title,
            'image'=>$newImage,
            'button'=>$req->button
        ]);
        if($result){
            return redirect(route('team.banner'))->with('update','updated Successfully');
        }else{
            return redirect(route('team.banner'))->with('update','Data not changed'); 
        }

    }
}
