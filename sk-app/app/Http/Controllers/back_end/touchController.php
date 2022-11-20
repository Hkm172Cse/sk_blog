<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\touchModel;

class touchController extends Controller
{
    public function index(){
        $data = touchModel::all();
        return view('back_end.pages.touch.touch', ['data'=>$data]);
    }

    public function edit($id){
        $data = touchModel::where('id', $id)->get();
        return view('back_end.pages.touch.edit_touch', ['data'=>$data]);
    }

    public function update(Request $req){
        $id= $req->input('edit_id');
        $res = touchModel::where('id',$id)->update([
            'name'=>$req->name,
            'title'=>$req->title,
            'button'=>$req->button
        ]); 
        if($res){
            return redirect(route('getintouch.content'))->with('update',"supdate is successfully!!!");
        }else{
            return redirect(route('getintouch.content'))->with('update',"Data Not Change!!!");
        }
    }

    public function add(){
        return view('back_end.pages.touch.new_touch');
    }

    public function insert(Request $req){
        $req->validate([
            'name'=>'required',
            'title'=>'required',
            'button'=>'required'
        ]);

        $res = touchModel::insert([
            'name'=>$req->name,
            'title'=>$req->title,
            'button'=>$req->button
        ]);
        
        if($res){
            return redirect(route('getintouch.content'))->with('insert',"inserted Successfully");
        }
    }

    public function status(Request $req){
        $st = $req->input('status');
        $id = $req->input('id');
        $result = touchModel::where('id',$id)->update([
            'status'=>$st
        ]); 
        if($result){
            return $result;
        }
    }
}
