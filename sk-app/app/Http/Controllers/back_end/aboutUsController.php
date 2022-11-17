<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use App\Models\back_end\aboutUsModel;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function index()
    {
        $data = aboutUsModel::all();
        // dd($data);
        return view('back_end.pages.about_us.about_us', ['data' => $data]);
    }

    public function eidt($id)
    {
        $data = aboutUsModel::where('id', '=', $id)->get();
        return view('back_end.pages.about_us.about_us_edit', ['data' => $data]);
    }
    public function insert_page()
    {
        return view('back_end.pages.about_us.new_about_us');
    }

    public function newInsert(Request $req)
    {
        $req->validate([
                'title' => 'required',
                'sort_des' => 'required',
                'des' => 'required',
                'image_one' => 'required',
                'image_two' => 'required',
                'about_link' => 'required'
            ]);

            $newImageOne = time() . "-" . $req->image_one->getClientOriginalName() . "." . $req->image_one->extension();
            $newImageTwo = time() . "-" . $req->image_two->getClientOriginalName() . "." . $req->image_one->extension();
    
            $req->image_one->move(public_path('images/about_us'), $newImageOne);
            $req->image_two->move(public_path('images/about_us'), $newImageTwo);

            $result = aboutUsModel::insert([
                'title' => $req->title,
                'sort_des' => $req->sort_des,
                'des' => $req->des,
                'img_one' => $newImageOne,
                'img_two' => $newImageTwo,
                'link' => $req->about_link
            ]);
            if($result){
                return redirect(route('about.us.content'))->with('insert_msg','new about us data inserted');
            }
    }

    public function update(Request $req)
    {

        $id = $req->input('edit_id');


        if ($req->image_one == null && $req->image_two == null) {
            $res = aboutUsModel::where('id', '=', $id)->update([
                'title' => $req->title,
                'sort_des' => $req->sort_des,
                'des' => $req->des,
                'link' => $req->about_link
            ]);
            if ($res) {
                return redirect(route('about.us.content'))->with('update_suc', 'data Updated');
            } else {
                return redirect(route('about.us.content'))->with('update_suc', 'Data Not Changed');
            }
        }

        if ($req->image_one == null) {
            $newImageTwo = time() . "-" . $req->image_two->getClientOriginalName() . "." . $req->image_two->extension();
            $req->image_two->move(public_path('images/about_us'), $newImageTwo);
            $res = aboutUsModel::where('id', '=', $id)->update([
                'title' => $req->title,
                'sort_des' => $req->sort_des,
                'des' => $req->des,
                'img_two' => $newImageTwo,
                'link' => $req->about_link
            ]);
            if ($res) {
                return redirect(route('about.us.content'))->with('update_suc', 'data Updated');
            } else {
                return redirect(route('about.us.content'))->with('update_suc', 'Data Not Changed');
            }
        }
        if ($req->image_two == null) {
            $newImageOne = time() . "-" . $req->image_one->getClientOriginalName() . "." . $req->image_one->extension();
            $req->image_one->move(public_path('images/about_us'), $newImageOne);
            $res = aboutUsModel::where('id', '=', $id)->update([
                'title' => $req->title,
                'sort_des' => $req->sort_des,
                'des' => $req->des,
                'img_one' => $newImageOne,
                'link' => $req->about_link
            ]);
            if ($res) {
                return redirect(route('about.us.content'))->with('update_suc', 'data Updated');
            } else {
                return redirect(route('about.us.content'))->with('update_suc', 'Data Not Changed');
            }
        }
        $newImageOne = time() . "-" . $req->image_one->getClientOriginalName() . "." . $req->image_one->extension();
        $newImageTwo = time() . "-" . $req->image_two->getClientOriginalName() . "." . $req->image_one->extension();

        $req->image_one->move(public_path('images/about_us'), $newImageOne);
        $req->image_two->move(public_path('images/about_us'), $newImageTwo);

        $res = aboutUsModel::where('id', '=', $id)->update([
            'title' => $req->title,
            'sort_des' => $req->sort_des,
            'des' => $req->des,
            'img_one' => $newImageOne,
            'img_two' => $newImageTwo,
            'link' => $req->about_link
        ]);
        if ($res) {
            return redirect(route('about.us.content'))->with('update_suc', 'data Updated');
        } else {
            return redirect(route('about.us.content'))->with('update_suc', 'Data Not Changed');
        }
    }
}