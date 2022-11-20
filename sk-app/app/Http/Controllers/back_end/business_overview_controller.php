<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\business_overview_model;

class business_overview_controller extends Controller
{
    public function index(){
        $data = business_overview_model::all();
        return view('back_end.pages.business_overview.business_overview', ['data'=>$data]);
    }
    public function edit($id){
        $data = business_overview_model::where('id', $id)->get();
        return view('back_end.pages.business_overview.business_overview_edit', ['data'=>$data]);
    }

    public function update(Request $req){
        //dd($req->all());
        $id= $req->input('edit_id');
        $res = business_overview_model::where('id',$id)->update([
            'project'=>$req->project,
            'project_num'=>$req->project_num,
            'customer'=>$req->customer,
            'customer_num'=>$req->customer_num,
            'data'=>$req->data,
            'data_num'=>$req->data_num,
            'class_base'=>$req->class_base,
            'class_base_num'=>$req->class_base_num,
        ]); 
        if($res){
            return redirect(route('business.overview'))->with('update',"supdate is successfully!!!");
        }else{
            return redirect(route('business.overview'))->with('update',"Data Not Change!!!");
        }
    }
    
}
