<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\clientBannerModel;
use Illuminate\Http\Request;

class clientBannerController extends Controller
{
    public function index()
    {
        $data = clientBannerModel::all();
        return view('back_end.client.banner.banner', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = clientBannerModel::where('id', '=', $id)->get();
        return view('back_end.client.banner.edit_banner', ['data' => $data]);
    }

    public function add()
    {
        return view('back_end.client.banner.new_banner');
    }

    public function delete($id)
    {
        $res = clientBannerModel::where('id', $id)->delete();
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
        $result = clientBannerModel::insert([
            'name' => $req->name,
            'title' => $req->title,
            'button' => $req->button,
            'image' => $newImage
        ]);
        if ($result) {
            return redirect(route('client.page.banner'))->with('insert', "Inserted Successfully!!!!");
        }
    }

    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = clientBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
            ]);

            if ($res) {
                return redirect(route('client.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('client.page.banner'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/about'), $newImage);
            $res = clientBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
                'image'=>$newImage
            ]);

            if ($res) {
                return redirect(route('client.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('client.page.banner'))->with('update', 'Data Not Changed!!');
        }

    }
}
