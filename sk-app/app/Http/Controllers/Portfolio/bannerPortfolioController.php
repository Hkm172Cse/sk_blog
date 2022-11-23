<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio\portfolioBannerModel;
use App\Models\portfolio\portfolioTextModel;

class bannerPortfolioController extends Controller
{
    public function index()
    {
        $data = portfolioBannerModel::all();
        return view('back_end.portfolio.banner.banner', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = portfolioBannerModel::where('id', '=', $id)->get();
        return view('back_end.portfolio.banner.edit_banner', ['data' => $data]);
    }
/*
    public function add()
    {
        return view('back_end.about.banner.new_banner');
    }

    public function delete($id)
    {
        $res = portfolioBannerModel::where('id', $id)->delete();
        if ($res) {
            return redirect(route('portfolio.page.banner'))->with('del_msg', "One service is deleted");
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
        $result = portfolioBannerModel::insert([
            'name' => $req->name,
            'title' => $req->title,
            'button' => $req->button,
            'image' => $newImage
        ]);
        if ($result) {
            return redirect(route('portfolio.page.banner'))->with('insert', "Inserted Successfully!!!!");
        }
    }
    */

    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = portfolioBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
            ]);

            if ($res) {
                return redirect(route('portfolio.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('portfolio.page.banner'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-".$req->image->getClientOriginalName();
            $req->image->move(public_path('images/portfolio'), $newImage);
            $res = portfolioBannerModel::where('id', $id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'button' => $req->button,
                'image'=>$newImage
            ]);

            if ($res) {
                return redirect(route('portfolio.page.banner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('portfolio.page.banner'))->with('update', 'Data Not Changed!!');
        }

    }

    public function portfolio(){
        $data = portfolioTextModel::all();
        return view('back_end.portfolio.banner.portfolio', ['data'=>$data]);
    }

    public function portfolio_text_edit($id){
        $data = portfolioTextModel::where('id', $id)->get();
        return view('back_end.portfolio.banner.edit_portfolio', ['data'=>$data]);
    }

    public function portfolio_update(Request $req){
        $id = $req->input('edit_id');
        $res = portfolioTextModel::where('id',$id)->update([
            'title'=>$req->title,
            'des'=>$req->des
        ]);
        if($res){
            return redirect(route('portfolio.page.portfolio'))->with('update','updated successfully');
        }else{
            return redirect(route('portfolio.page.portfolio'))->with('update','data not chenged');
        } 
    }
}
