<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\reviewModel;

class reviewController extends Controller
{
    public function index(){
        $data = reviewModel::all();
        return view('back_end.pages.review.review', ['data'=>$data]);
    }

    public function edit($id){
        $data = reviewModel::where('id', $id)->get();
        return view('back_end.pages.review.edit_review', ['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->input('edit_id');
        if($req->image == null){
            $res = reviewModel::where('id', $id)->update([
                'review'=>$req->review,
                'client_name'=>$req->client_name,
                'designation'=>$req->designation
            ]);
            if($res){
                return redirect(route('client.review.content'))->with('update','updated successfuly');
            }
        }
        else{
            $newImage = time()."-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/review'),$newImage);
            $res = reviewModel::where('id', $id)->update([
                'image'=>$newImage,
                'review'=>$req->review,
                'client_name'=>$req->client_name,
                'designation'=>$req->designation
            ]);
            if($res){
                return redirect(route('client.review.content'))->with('update','updated successfuly');
            }
        }
    }

    public function delete($id){
        $res = reviewModel::where('id',$id)->delete();
        if($res){
            return redirect(route('client.review.content'))->with('del_msg',"deleted successfuly!!");
        }
    }

    public function add(){
        return view('back_end.pages.review.new_review');
    }

    public function insert(Request $req){
        $req->validate([
            'client_name'=>'required',
            'designation'=>'required',
            'review'=>'required',
            'image'=>'required'
        ]);
        $newImage = time()."-".$req->image->getClientOriginalName();
        $req->image->move(public_path('images/review'), $newImage);

        $res = reviewModel::insert([
            'image'=>$newImage,
            'review'=>$req->review,
            'client_name'=>$req->client_name,
            'designation'=>$req->designation
        ]);
        if($res){
            return redirect(route('client.review.content'))->with('insert',"new review added sunccessfuly!");
        }
    }
}
