<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\ftr_right_model;

class ftr_rightController extends Controller
{
    // public function index(){
    //     $data = ftr_right_model::all();
    //     return view('back_end.pages.right_footer.right_footer',['data'=>$data]);
    // }

    public function edit($id){
        $data = ftr_right_model::where('id',$id)->get();
        return view('back_end.pages.right_footer.edit_right_footer',['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->input('edit_id');
        $res = ftr_right_model::where('id', $id)->update([
            'name'=>$req->name,
            'link'=> $req->link
        ]);
        if($res){
            return redirect(route('foote.user.links'))->with('update_right',"update successfuly!!");
        }else{
            return redirect(route('foote.user.links'))->with('update_right',"Data not Chenged!!");
        }
    }

    public function add(){
        return view('back_end.pages.right_footer.new_right_footer');
    }

    public function insert(Request $req){
        $req->validate([
            'name'=>'required',
            'link'=>'required'
        ]);

        $res = ftr_right_model::insert([
            'name'=>$req->name,
            'link'=>$req->name
        ]);
        if($res){
            return redirect(route('foote.user.links'))->with('insert_right','inserted successfully!!');
        }
    }

    public function delete($id){
        $res = ftr_right_model::where('id',$id)->delete();
        if($res){
            return redirect(route('foote.user.links'))->with('del_msg_right','Deleted successfully!!');
        }
    }
}
