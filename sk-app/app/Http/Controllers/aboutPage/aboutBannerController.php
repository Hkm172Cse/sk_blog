<?php

namespace App\Http\Controllers\aboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutPage\aboutBannerModel;

class aboutBannerController extends Controller
{
    public function index()
    {
        $data = aboutBannerModel::all();
        return view('back_end.about.banner.banner', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = aboutBannerModel::where('id', '=', $id)->get();
        return view('back_end.about.banner.edit_banner', ['data' => $data]);
    }

    public function add()
    {
        return view('back_end.about.banner.new_banner');
    }

    public function delete($id)
    {
        $res = aboutBannerModel::where('id', $id)->delete();
        if ($res) {
            return redirect(route('service.content'))->with('del_msg', "One service is deleted");
        }
    }

    public function insert(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required',
            'button' => 'required'
        ]);
        $newImage = time() . "-" . $req->image->getClientOriginalName();
        $req->image->move(public_path('images/about'), $newImage);
        $result = aboutBannerModel::insert([
            'name' => $req->name,
            'title' => $req->title,
            'button' => $req->button,
            'image' => $newImage
        ]);
        if ($result) {
            return redirect(route('about.page.banner'))->with('insert', "Inserted Successfully!!!!");
        }
    }

    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = aboutBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
            ]);

            if ($res) {
                return redirect(route('about.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('about.page.banner'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/about'), $newImage);
            $res = aboutBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
                'image'=>$newImage
            ]);

            if ($res) {
                return redirect(route('about.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('about.page.banner'))->with('update', 'Data Not Changed!!');
        }

    }
}