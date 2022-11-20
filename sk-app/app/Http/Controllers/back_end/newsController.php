<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back_end\newsModel;

class newsController extends Controller
{
    public function index(){
        $data = newsModel::all();
        return view('back_end.pages.news.news', ['data'=>$data]);
    }
    public function edit($id){
        $data = newsModel::where('id', $id)->get();
        return view('back_end.pages.news.edit_news', ['data'=>$data]);
    }

    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $result = newsModel::where('id', $id)->update([
                'title' => $req->title,
                'date' => $req->date,
                'news' => $req->news,
                'tag' => $req->tag,
            ]);
            if ($result) {
                return redirect(route('news.content'))->with('update_suc', 'data Updated');
            } else {
                return redirect(route('news.content'))->with('update_suc', 'Data not Changes');
            }
        }
        $newImageName = time() . "-" .$req->image->getClientOriginalName();
        $test = $req->image->move(public_path('images/news'), $newImageName);
        $res = newsModel::where('id', '=', $id)->update([
                'title' => $req->title,
                'date' => $req->date,
                'news' => $req->news,
                'tag' => $req->tag,
                'image'=>$newImageName
        ]);
        if ($res) {
            return redirect(route('news.content'))->with('update_suc', 'data Updated');
        }


    }
    public function add()
    {
        return view('back_end.pages.news.new_news');
    }

    public function insert(Request $req)
    {
        $req->validate([
            'title' => "required",
            'news' => "required",
            'tag' => "required",
            'date' => "required",
            'image' => "required",
        ]);
        $newImageName = time() . "-".$req->image->getClientOriginalName();
        $test = $req->image->move(public_path('images/news'), $newImageName);
        $res = newsModel::insert([
            'title' => $req->title,
            'date' => $req->date,
            'news' => $req->news,
            'tag' => $req->tag,
            'image' => $newImageName
        ]);
        if (!$res) {
            return redirect(route('news.content'))->with('insert',"inserted Failed");
        }
        return redirect(route('news.content'))->with('insert', 'inserted successfuly');
    }

    public function delete($id){
        $res = newsModel::where('id',$id)->delete();
        if($res){
            return redirect(route('news.content'))->with('del_msg','Deleted Successfuly!!');
        }
    }
}
