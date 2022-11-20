<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\caseModel;
use PHPUnit\TextUI\XmlConfiguration\Directory;

class caseController extends Controller
{
    public function index(){
        $data = caseModel::all();
        return view('back_end.pages.case.case',['data'=>$data]);
    }

    public function edit($id){
        $data = caseModel::where('id',$id)->get();
        return view('back_end.pages.case.edit_case', ['data'=>$data]);
    }

    public function update(Request $req){
        $id =  $req->input('edit_id');
        if($req->image == null){
            $res = caseModel::where('id',$id)->update([
                'title'=>$req->title,
                'sort_title'=>$req->sort_title,
                'link'=>$req->link
            ]);
            if($res){
                return redirect(route('case.content'))->with('update','Updated Successfuly');
            }else{
                return redirect(route('case.content'))->with('update','Data Not Changed');
            }
        }

        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/case'), $newImage);

        $res = caseModel::where('id',$id)->update([
            'image'=>$newImage,
            'title'=>$req->title,
            'sort_title'=>$req->sort_title,
            'link'=>$req->link
        ]);
        if($res){
            return redirect(route('case.content'))->with('update','Updated Successfuly');
        }else{
            return redirect(route('case.content'))->with('update','Data Not Changed');
        }
    }

    public function add(){
        return view('back_end.pages.case.new_case');
    }

    public function insert(Request $req){
        $req->validate([
            'title'=>'required',
            'sort_title'=>'required',
            'link'=>'required',
            'image'=>'required'
        ]);
        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/case'), $newImage);

        $res = caseModel::insert([
            'image'=>$newImage,
            'title'=>$req->title,
            'sort_title'=>$req->sort_title,
            'link'=>$req->link
        ]);

        if($res){
            return redirect(route('case.content'))->with('insert','new case data inserted successfuly');
        }
    }

    public function delete($id){
        $res = caseModel::where('id',$id)->delete();
        if($res){
            return redirect(route('case.content'))->with('del_msg',"Deleted Successfuly!!");
        }
    }
}
