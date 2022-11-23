<?php

namespace App\Http\Controllers\portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio\upcomingPortfolio;

class upcomingPortflioController extends Controller
{
    public function index(){
        $data = upcomingPortfolio::all();
        return view('back_end.portfolio.upcoming.upcoming', ['data'=>$data]);
    }

    public function active_edit($id){
        $data = upcomingPortfolio::where('id',$id)->get();
        return view('back_end.portfolio.upcoming.edit_upcoming', ['data'=>$data]);
    }

    public function upcoming_update(Request $req){
        $id = $req->input('edit_id');
        $res = upcomingPortfolio::where('id',$id)->update([
            'name'=>$req->name
        ]); 
        if($res){
            return redirect(route('upcoming.portpolio'))->with('update','updated successfully!');
        }else{
            return redirect(route('upcoming.portpolio'))->with('update','Data not chenged');
        }
    }

    public function add(){
        return view('back_end.portfolio.upcoming.new_upcoming');
    }

    public function insert(Request $req){
        $req->validate([
            'name'=>'required'
        ]);
        $res = upcomingPortfolio::insert(['name'=>$req->name]);
        if($res){
            return redirect(route('upcoming.portpolio'))->with('insert', 'insert successfull');
        }
    }

    public function delete($id){
        $res = upcomingPortfolio::where('id',$id)->delete();
        if($res){
            return redirect(route('upcoming.portpolio'))->with('del_msg', 'deleted successfull');
        }
    }
}
