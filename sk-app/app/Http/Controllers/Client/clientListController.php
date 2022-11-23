<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\clientListModel;
use Illuminate\Http\Request;


class clientListController extends Controller
{
    public function index(){
        $data = clientListModel::all();
        return view('back_end.client.list.list', ['data'=>$data]);
    }

    public function edit($id){
        $data = clientListModel::where('id',$id)->get();
        return view('back_end.client.list.edit_list', ['data'=>$data]);
    }

    public function update(Request $req)
    {
       // dd($req->all());
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = clientListModel::where('id', $id)->update([
                'name'=>$req->name,
                'title'=>$req->title
            ]);

            if ($res) {
                return redirect(route('client.list'))->with('update', 'updated successfully!!');
            }
            return redirect(route('client.list'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-" . $req->image->getClientOriginalName();
            $req->image->move(public_path('images/client'), $newImage);
            $res = clientListModel::where('id', $id)->update([
                'name'=>$req->name,
                'title'=>$req->title,
                'image'=>$newImage
            ]);

            if ($res) {
                return redirect(route('client.list'))->with('update', 'updated successfully!!');
            }
            return redirect(route('client.list'))->with('update', 'Data Not Changed');
        }

    }

    public function add(){
        return view('back_end.client.list.new_list');
    }

    public function insert(Request $req)
    {
        $req->validate([
            'name' => "required",
            'title' => "required",
            'image' => "required"
        ]);
        $newImageName = time() . "-" .  $req->image->getClientOriginalName();
        $test = $req->image->move(public_path('images/client'), $newImageName);
        $res = clientListModel::insert([
            'name' => $req->name,
            'title' => $req->title,
            'image' => $newImageName
        ]);
        if (!$res) {
            return redirect(route('client.list'));
        }
        return redirect(route('client.list'))->with('insert', 'New Banner Inserted');
    }

    public function delete($id){
        $res = clientListModel::where('id', $id)->delete();
        if (!$res) {
            return redirect(route('client.list'));
        }
        return redirect(route('client.list'))->with('del_msg', 'Delete Successfully');
    }
}
