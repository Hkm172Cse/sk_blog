<?php

namespace App\Http\Controllers\portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio\activeModel;

class activeController extends Controller
{
    public function index(){
        $data = activeModel::all();
        return view('back_end.portfolio.active.active', ['data'=>$data]);
    }

    public function active_edit($id){
        $data = activeModel::where('id',$id)->get();
        return view('back_end.portfolio.active.edit_active', ['data'=>$data]);
    }

    public function active_update(Request $req){
        $id = $req->input('edit_id');
        $res = activeModel::where('id',$id)->update([
            'name'=>$req->name
        ]); 
        if($res){
            return redirect(route('active.portpolio'))->with('update','updated successfully!');
        }else{
            return redirect(route('active.portpolio'))->with('update','Data not chenged');
        }
    }

    public function add(){
        return view('back_end.portfolio.active.new_active');
    }

    public function insert(Request $req){
        $req->validate([
            'name'=>'required'
        ]);
        $res = activeModel::insert(['name'=>$req->name]);
        if($res){
            return redirect(route('active.portpolio'))->with('insert', 'insert successfull');
        }
    }

    public function delete($id){
        $res = activeModel::where('id',$id)->delete();
        if($res){
            return redirect(route('active.portpolio'))->with('del_msg', 'deleted successfull');
        }
    }
}
