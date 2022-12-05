<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\team\staffModel;

class staffController extends Controller
{
    public function index(){
        $data = staffModel::all();
        return view('back_end.team.staff.staff', ['data'=>$data]);
    }

    public function edit($id){
        $data = staffModel::where('id',$id)->get();
        return view('back_end.team.staff.edit_staff', ['data'=>$data]);
    }

    public function add(){
        return view('back_end.team.staff.new_staff');
    }

    public function insert(Request $req){
        $req->validate([
            'name'=>'required',
            'title'=>'required',
            'image'=>'required'
        ]);

        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/team'), $newImage);
        $result = staffModel::insert([
            'name'=>$req->name,
            'title'=>$req->title,
            'image'=>$newImage
        ]);
        if($result){
            return redirect(route('team.page.staff'))->with('insert','insert successfuly');
        }
    }

    public function update(Request $req){
      $id = $req->input('edit_id');
      if($req->image==null){
        $result = staffModel::where('id',$id)->update([
            'name'=>$req->name,
            'title'=>$req->title
        ]);
        if($result){
            return redirect(route('team.page.staff'))->with('update','updated successfully');
        }else{
            return redirect(route('team.page.staff'))->with('update','Data not changed'); 
        }
      }else{
        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/team'),$newImage);
        $result = staffModel::where('id',$id)->update([
            'name'=>$req->name,
            'title'=>$req->title,
            'image'=>$newImage
        ]);
        if($result){
            return redirect(route('team.page.staff'))->with('update','updated successfully');
        }else{
            return redirect(route('team.page.staff'))->with('update','Data not changed'); 
        }
      }
    }
}
