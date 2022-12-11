<?php

namespace App\Http\Controllers\Meta;

use App\Http\Controllers\Controller;
use App\Models\Meta\aboutusMetaModel;
use App\Models\Meta\clientMetaModel;
use App\Models\Meta\communityMetaModel;
use App\Models\Meta\homeMetaModel;
use App\Models\Meta\portfolioMetaModel;
use App\Models\Meta\teamMetaModel;
use Illuminate\Http\Request;

class metaController extends Controller
{
    public function homeMeta(){
        $homeMeta = homeMetaModel::all();
        return view('back_end.Meta.homeMeta',['data'=>$homeMeta]);
    }

    public function homeEdit($id){
        $data = homeMetaModel::where('id', $id)->get();
        return view('back_end.Meta.homeMetaEdit', ['data' => $data]);
    }

    public function homeUpdate(Request $req){
       
        $id = $req->input('edit_id');
       
        $result = homeMetaModel::where('id', $id)->update([
            'title' => $req->title,
            'des' => $req->des,
            'tag' => $req->tag
        ]);
        if($result){
            return redirect(route('home.page.meta'))->with('update', 'updated successfull');
        }else{
            return redirect(route('home.page.meta'))->with('update', 'Data not changed');
        }
    }


    // About us page meta

    public function aboutUsMeta(){
        $data = aboutusMetaModel::all();
        return view('back_end.Meta.aboutUsMeta', ['data'=>$data]);
    }

    public function abutUsEdit($id){
        $data = aboutusMetaModel::where('id', $id)->get();
        return view('back_end.Meta.aboutUsMetaEdit', ['data' => $data]);
    }

    public function aboutusUpdate(Request $req){
        $id = $req->input('edit_id');
       
        $result = aboutusMetaModel::where('id', $id)->update([
            'title' => $req->title,
            'des' => $req->des,
            'tag' => $req->tag
        ]);
        if($result){
            return redirect(route('about.page.meta'))->with('update', 'updated successfull');
        }else{
            return redirect(route('about.page.meta'))->with('update', 'Data not changed');
        }
    }

    // Community Meta Functions
    public function communityMeta(){
        $data = communityMetaModel::all();
        return view('back_end.Meta.communityMeta', ['data'=>$data]);
    }

    public function communityEdit($id){
        $data = communityMetaModel::where('id', $id)->get();
        return view('back_end.Meta.communityMetaEdit', ['data' => $data]);
    }

    public function communityUpdate(Request $req){
        $id = $req->input('edit_id');
       
        $result = communityMetaModel::where('id', $id)->update([
            'title' => $req->title,
            'des' => $req->des,
            'tag' => $req->tag
        ]);
        if($result){
            return redirect(route('community.page.meta'))->with('update', 'updated successfull');
        }else{
            return redirect(route('community.page.meta'))->with('update', 'Data not changed');
        } 
    }

    // Portfolio Meta Functions

    public function portfolioMeta(){
        $data = portfolioMetaModel::all();
        return view('back_end.Meta.portfolioMeta', ['data' => $data]);
    }

    public function portfolioEdit($id){
        $data = portfolioMetaModel::where('id', $id)->get();
        return view('back_end.Meta.portfolioMetaEdit', ['data' => $data]);
    }

    public function portfolioUpdate(Request $req){
        $id = $req->input('edit_id');
       
        $result = portfolioMetaModel::where('id', $id)->update([
            'title' => $req->title,
            'des' => $req->des,
            'tag' => $req->tag
        ]);
        if($result){
            return redirect(route('portfolio.page.meta'))->with('update', 'updated successfull');
        }else{
            return redirect(route('portfolio.page.meta'))->with('update', 'Data not changed');
        } 
    }

    // Client Meta Functions
    public function clientMeta(){
        $data = clientMetaModel::all();
        return view('back_end.Meta.clientMeta', ['data' => $data]);
    }

    public function clientEdit($id){
        $data = clientMetaModel::where('id', $id)->get();
        return view('back_end.Meta.clientMetaEdit', ['data' => $data]);
    }

    public function client_meta_update(Request $req){
        $id = $req->input('edit_id');
       
        $result = clientMetaModel::where('id', $id)->update([
            'title' => $req->title,
            'des' => $req->des,
            'tag' => $req->tag
        ]);
        if($result){
            return redirect(route('client.page.meta'))->with('update', 'updated successfull');
        }else{
            return redirect(route('client.page.meta'))->with('update', 'Data not changed');
        } 
    }

    //Team meta functions 
    public function teamMeta(){
        $data = teamMetaModel::all();
        return view('back_end.Meta.teamMeta', ['data' => $data]);
    }

    public function teamEdit($id){
        $data = teamMetaModel::where('id', $id)->get();
        return view('back_end.Meta.teamMetaEdit', ['data' => $data]);
    }


    public function teamMetaUpdate(Request $req){
        $id = $req->input('edit_id');
       
        $result = teamMetaModel::where('id', $id)->update([
            'title' => $req->title,
            'des' => $req->des,
            'tag' => $req->tag
        ]);
        if($result){
            return redirect(route('team.page.meta'))->with('update', 'updated successfull');
        }else{
            return redirect(route('team.page.meta'))->with('update', 'Data not changed');
        } 
    }
}
