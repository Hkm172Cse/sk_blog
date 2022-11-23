<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\clientTextModel;

class clientTextController extends Controller
{
    public function index(){
        $data = clientTextModel::all();
        return view('back_end.client.Text.client_text', ['data'=>$data]);
    }

    public function edit($id)
    {
        $data = clientTextModel::where('id', '=', $id)->get();
        return view('back_end.client.Text.edit_client_text', ['data' => $data]);
    }
    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = clientTextModel::where('id', $id)->update([
                'name' => $req->des
            ]);

            if ($res) {
                return redirect(route('client.page.text'))->with('update', 'updated successfully!!');
            }
            return redirect(route('client.page.text'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/client'), $newImage);
            $res = clientTextModel::where('id', $id)->update([
                'image'=>$newImage,
                'des'=>$req->des
            ]);

            if ($res) {
                return redirect(route('client.page.text'))->with('update', 'updated successfully!!');
            }
            return redirect(route('client.page.text'))->with('update', 'Data Not Changed!!');
        }

    }
}
