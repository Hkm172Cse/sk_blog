<?php

namespace App\Http\Controllers\community;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\community\communityBannerModel;

class communityBannerController extends Controller
{
    
    public function index()
    {
        $data = communityBannerModel::all();
        return view('back_end.community.banner.banner', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = communityBannerModel::where('id', '=', $id)->get();
        return view('back_end.community.banner.edit_banner', ['data' => $data]);
    }

    public function add()
    {
        return view('back_end.about.banner.new_banner');
    }

    public function delete($id)
    {
        $res = communityBannerModel::where('id', $id)->delete();
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
        $result = communityBannerModel::insert([
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
            $res = communityBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
            ]);

            if ($res) {
                return redirect(route('comminuty.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('comminuty.page.banner'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/about'), $newImage);
            $res = communityBannerModel::where('id', $id)->update([
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
