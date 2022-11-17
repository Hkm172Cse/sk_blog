<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use App\Models\back_end\banner_model;
use Illuminate\Http\Request;

class banner_controller extends Controller
{
    public function index()
    {
        $data = banner_model::all();
        return view('back_end.pages.banner.banner_data', ['data' => $data]);
    }
    public function newInsertion()
    {
        return view('back_end.pages.banner.new_banner');
    }

    public function insert_banner(Request $req)
    {
        $req->validate([
            'des' => "required",
            'sort_des' => "required",
            'image' => "required",
            'btn_one_name' => "required",
            'btn_two_name' => "required",
            'btn_one_link' => "required",
            'btn_two_link' => "required",
        ]);
        $newImageName = time() . "-" . $req->image_name . "." . $req->image->extension();
        $test = $req->image->move(public_path('images/banner'), $newImageName);
        $res = banner_model::insert([
            'des' => $req->des,
            'sort_des' => $req->sort_des,
            'image' => $newImageName,
            'btn_one' => $req->btn_one_name,
            'btn_two' => $req->btn_two_name,
            'btn_one_link' => $req->btn_one_link,
            'btn_two_link' => $req->btn_two_link
        ]);
        if (!$res) {
            return redirect(route('new_banner'));
        }
        return redirect(route('banner_content'))->with('new_banner', 'New Banner Inserted');
    }

    public function banner_del($id)
    {
        $res = banner_model::where('id', '=', $id)->delete();
        if ($res) {
            return redirect(route('banner_content'))->with('delete_banner', 'Deleted Sucessfully!!!');
        }
    }

    public function edit_page($id)
    {
        $data = banner_model::where('id', '=', $id)->get();
        return view('back_end.pages.banner.edit_banner', ['data' => $data]);
    }

    public function edit_submit(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $result = banner_model::where('id', $id)->update([
                'sort_des' => $req->sort_des,
                'des' => $req->des,
                'btn_one' => $req->btn_one_name,
                'btn_two' => $req->btn_two_name,
                'btn_one_link' => $req->btn_two_link,
                'btn_two_link' => $req->btn_two_link
            ]);
            if ($result) {
                return redirect(route('banner_content'))->with('update_suc', 'data Updated');
            } else {
                return redirect(route('banner_content'))->with('update_suc', 'Data not Changes');
            }
        }
        $newImageName = time() . "-" . $req->image_name . "." . $req->image->extension();
        $test = $req->image->move(public_path('images/banner'), $newImageName);
        $res = banner_model::where('id', '=', $id)->update([
            'sort_des' => $req->sort_des,
            'des' => $req->des,
            'image' => $newImageName,
            'btn_one' => $req->btn_one_name,
            'btn_two' => $req->btn_two_name,
            'btn_one_link' => $req->btn_two_link,
            'btn_two_link' => $req->btn_two_link
        ]);
        if ($res) {
            return redirect(route('banner_content'))->with('update_suc', 'data Updated');
        }


    }
}