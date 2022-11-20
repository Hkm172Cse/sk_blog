<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\ftr_left_Model;

class ftr_leftController extends Controller
{
    public function index(){
        $data = ftr_left_Model::all();
        return view('back_end.pages.left_footer.left_footer',['data'=>$data]);
    }

    public function edit($id){
        $data = ftr_left_Model::where('id',$id)->get();
        return view('back_end.pages.left_footer.edit_left_footer',['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->input('edit_id');
        $res = ftr_left_Model::where('id', $id)->update([
            'name'=>$req->name,
            'link'=> $req->link
        ]);
        if($res){
            return redirect(route('left.footer.link'))->with('update',"update successfuly!!");
        }else{
            return redirect(route('left.footer.link'))->with('update',"Data not Chenged!!");
        }
    }

    public function add(){
        return view('back_end.pages.left_footer.new_left_footer');
    }

    public function insert(Request $req){
        $req->validate([
            'name'=>'required',
            'link'=>'required'
        ]);

        $res = ftr_left_Model::insert([
            'name'=>$req->name,
            'link'=>$req->name
        ]);
        if($res){
            return redirect(route('left.footer.link'))->with('insert','inserted successfully!!');
        }
    }

    public function delete($id){
        $res = ftr_left_Model::where('id',$id)->delete();
        if($res){
            return redirect(route('left.footer.link'))->with('del_msg','Deleted successfully!!');
        }
    }
}
