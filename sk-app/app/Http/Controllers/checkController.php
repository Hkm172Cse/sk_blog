<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkModel;


class checkController extends Controller
{
    public function insertOne(Request $req){
        //dd($req->all());

        checkModel::insert([
            'img_one' => $req->img_one,
            'img_two'=>$req->img_two
         ]);
    }

    public function getImage(){
        $id = 1;
        $data = checkModel::where('id', $id)->get();
        return view('getImg', ['data'=>$data]);

    }

    public function updateOne(Request $req){
        $id = $req->input('edit_id');
        //d($req->all());
        checkModel::where('id', 2)->update([
            'img_one'=>$req->img_one,
            'img_two'=>$req->img_two
        ]);
        
    }
}
