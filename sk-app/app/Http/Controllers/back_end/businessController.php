<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\businessModel;

class businessController extends Controller
{
    public function index(){
        $data = businessModel::all();
        return view('back_end.pages.business.business', ['data'=>$data]);
    }

    public function add(){
        return view('back_end.pages.business.new_business');
    }

    public function insert(Request $req){
        $req->validate([
            'title'=>'required',
            'sort_des'=>'required',
            'btn_one'=>'required',
            'btn_two'=>'required',
            'image'=>'required'
        ]);

        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/business'), $newImage);
        $result = businessModel::insert([
            'title'=>$req->title,
            'sort_des'=>$req->sort_des,
            'button_one'=>$req->btn_one,
            'button_two'=>$req->btn_two,
            'image'=>$newImage
        ]);

        if($result){
            return redirect(route('business.content'))->with('insert_msg','add new business trends');
        }
    }

    public function edit($id){
         $data = businessModel::where('id','=',$id)->get();
         return view('back_end.pages.business.business_edit', ['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->input('edit_id');
        if($req->image == null){
            $result = businessModel::insert([
                'title'=>$req->title,
                'sort_des'=>$req->sort_des,
                'button_one'=>$req->btn_one,
                'button_two'=>$req->btn_two
            ]);
            if($result){
                return redirect(route('business.content'))->with('update_suc',"Updated Successfully!!!");
            }else{
                return redirect(route('business.content'))->with('update_suc',"Data Not Changed!!!");
            }
        }

        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/business'), $newImage);
        $result = businessModel::insert([
            'title'=>$req->title,
            'sort_des'=>$req->sort_des,
            'button_one'=>$req->btn_one,
            'button_two'=>$req->btn_two,
            'image'=>$newImage
        ]);
        if($result){
            return redirect(route('business.content'))->with('update_suc',"Updated Successfully!!!");
        }else{
            return redirect(route('business.content'))->with('update_suc',"Data Not Changed!!!");
        }
    }

    public function delete($id){
        $result = businessModel::where('id',$id)->delete();
        if($result){
            return redirect(route('business.content'))->with('del_msg','delete successfully!!');
        }
    }
}
