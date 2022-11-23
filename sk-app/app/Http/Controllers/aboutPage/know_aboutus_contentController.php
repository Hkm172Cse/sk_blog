<?php

namespace App\Http\Controllers\aboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutPage\know_aboutus_content;
use App\Models\aboutPage\know_about_heading_model;

class know_aboutus_contentController extends Controller
{
    public function index()
    {
        $data = know_aboutus_content::all();
        $heading_data = know_about_heading_model::all();
        return view('back_end.about.about_know.about_know', ['content_data' => $data, 'heading_data'=>$heading_data]);
    }
    public function edit($id)
    {
        $data = know_aboutus_content::where('id', '=', $id)->get();
        return view('back_end.about.about_know.edit_about_know', ['data' => $data]);
    }
    public function aboutKnow_heading_edit($id)
    {
        $data = know_about_heading_model::where('id', '=', $id)->get();
        return view('back_end.about.about_know.headeing_edit_aboutKnow', ['data' => $data]);
    }

    public function add()
    {
        return view('back_end.about.about_know.new_about_know');
    }

    public function delete($id)
    {
        $res = partnerModel::where('id', $id)->delete();
        if ($res) {
            return redirect(route('service.content'))->with('del_msg', "One service is deleted");
        }
    }

    public function insert(Request $req)
    {
        $req->validate([
            'image' => 'required',
            'image_title'=>'required',
            'des'=>'required',
            'comments'=>'required',
            'title'=>'required',
            'date'=>'required'
        ]);
        $newImage = time() . "-" . $req->image->getClientOriginalName();
        $req->image->move(public_path('images/about'), $newImage);
        $result = know_aboutus_content::insert([
            'image' => $newImage,
            'image_title'=>$req->image_title,
            'date'=>$req->date,
            'comments'=>$req->comments,
            'title'=>$req->title,
            'des'=>$req->des
        ]);
        if ($result) {
            return redirect(route('know.about.us'))->with('insert_content', "Inserted Successfully!!!!");
        }
    }

    public function update(Request $req)
    {
       // dd($req->all());
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = know_aboutus_content::where('id', $id)->update([
                'image_title'=>$req->image_title,
                'date'=>$req->date,
                'comments'=>$req->comments,
                'title'=>$req->title,
                'des'=>$req->des
            ]);

            if ($res) {
                return redirect(route('know.about.us'))->with('update_content', 'updated successfully!!');
            }
            return redirect(route('know.about.us'))->with('update_content', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-" . $req->image->getClientOriginalName();
            $req->image->move(public_path('images/about'), $newImage);
            $res = know_aboutus_content::where('id', $id)->update([
                'image'=>$newImage,
                'image_title'=>$req->image_title,
                'date'=>$req->date,
                'comments'=>$req->comments,
                'title'=>$req->title,
                'des'=>$req->des
            ]);

            if ($res) {
                return redirect(route('know.about.us'))->with('update_content', 'updated successfully!!');
            }
            return redirect(route('know.about.us'))->with('update_content', 'Data Not Changed');
        }

    }

    public function aboutKnow_headig_update(Request $req){
        $id = $req->input('edit_id');
        $res = know_about_heading_model::where('id', $id)->update([
            'title' => $req->title,
            'des'=>$req->des
        ]);
        if ($res) {
            return redirect(route('know.about.us'))->with('update_heading', 'updated successfully!!');
        }
        return redirect(route('know.about.us'))->with('update_heading', 'Data Not Changed!!');
    }
}
