<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use App\Models\back_end\service_right_section;
use Illuminate\Http\Request;
use App\Models\back_end\serviceModel;

class serviceController extends Controller
{
    public function index()
    {
        $data = serviceModel::all();
        $r_data = service_right_section::all();
        return view('back_end.pages.service.service', ['data' => $data, 'r_data'=>$r_data]);
    }

    public function edit($id)
    {
        $data = serviceModel::where('id', '=', $id)->get();
        return view('back_end.pages.service.edit_service', ['data' => $data]);
    }
    public function r_edit($id)
    {
        $data = service_right_section::where('id', '=', $id)->get();
        return view('back_end.pages.service.edit_r_service', ['data' => $data]);
    }

    public function add(){
        return view('back_end.pages.service.new_service');
    }

    public function delete($id){
        $res = serviceModel::where('id',$id)->delete();
        if($res){
            return redirect(route('service.content'))->with('del_msg',"One service is deleted");
        }
    }

    public function insert(Request $req){
        $req->validate([
            'section'=>'required',
            'title'=>'required',
            'des'=>'required',
            'service_title'=>'required',
            'service_des'=>'required',
            'service_btn'=>'required',
            'image'=>'required'
        ]);
        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/service'), $newImage);
        $result = serviceModel::insert([
           'section'=>$req->section,
           'title'=>$req->title,
           'des'=>$req->des,
           'service_btn'=>$req->service_btn,
           'image'=> $newImage,
           'service_title'=>$req->service_title,
           'service_des'=>$req->service_des
        ]);
        if($result){
            return redirect(route('service.content'))->with('new_service',"New Service Inserted Successfully!!!!");
        }
    }

    public function r_update(Request $req){
        $id = $req->input('edit_id');
        $res = service_right_section::where('id', $id)->update([
            'name' => $req->name,
            'title' => $req->title,
            'link' => $req->link
        ]);

        if ($res) {
            return redirect(route('service.content'))->with('update_r_suc', 'updated successfully!!');
        }
        return redirect(route('service.content'))->with('update_r_suc', 'Data Not Changed');
    }

    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = serviceModel::where('id', $id)->update([
                'section' => $req->section,
                'title' => $req->title,
                'des' => $req->des,
                'service_btn' => $req->service_btn,
                'service_title' => $req->service_title,
                'service_des' => $req->service_des
            ]);

            if ($res) {
                return redirect(route('service.content'))->with('update_suc', 'updated successfully!!');
            }
            return redirect(route('service.content'))->with('update_suc', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time()."-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/service'), $newImage); 
            $res = serviceModel::where('id', $id)->update([
                'section' => $req->section,
                'title' => $req->title,
                'des' => $req->des,
                'service_btn' => $req->service_btn,
                'image'=>$newImage,
                'service_title' => $req->service_title,
                'service_des' => $req->service_des
            ]);

            if ($res) {
                return redirect(route('service.content'))->with('update_suc', 'updated successfully!!');
            }
            return redirect(route('service.content'))->with('update_suc', 'Data Not Changed!!');
        }

    }
}