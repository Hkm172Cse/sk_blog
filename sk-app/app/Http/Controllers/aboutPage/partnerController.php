<?php

namespace App\Http\Controllers\aboutPage;

use App\Http\Controllers\Controller;
use App\Models\aboutPage\partnerModel;
use App\Models\aboutPage\partnerTitleModel;
use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function index()
    {
        $data = partnerModel::all();
        $partner = partnerTitleModel::all();
        return view('back_end.about.partner.partner', ['logo' => $data, 'partner'=>$partner]);
    }
    public function edit($id)
    {
        $data = partnerModel::where('id', '=', $id)->get();
        return view('back_end.about.partner.edit_logo', ['data' => $data]);
    }
    public function partner_edit($id)
    {
        $data = partnerTitleModel::where('id', '=', $id)->get();
        return view('back_end.about.partner.edit_partner', ['data' => $data]);
    }

    public function add()
    {
        return view('back_end.about.partner.new_logo');
    }

    public function delete($id)
    {
        $res = partnerModel::where('id', $id)->delete();
        if ($res) {
            return redirect(route('service.content'))->with('del_msg', "One service is deleted");
        }
    }

    public function insert(Request $req)
    {
        $req->validate([
            'image' => 'required',
        ]);
        $newImage = time() . "-" . $req->image->getClientOriginalName();
        $req->image->move(public_path('images/about'), $newImage);
        $result = partnerModel::insert([
            'logo' => $newImage
        ]);
        if ($result) {
            return redirect(route('about.page.partner'))->with('insert_logo', "Inserted Successfully!!!!");
        }
    }

    public function update(Request $req)
    {
        $id = $req->input('edit_id');
        if ($req->image == null) {
            $res = partnerModel::where('id', $id)->update([
                'logo' => $req->old_image,
            ]);

            if ($res) {
                return redirect(route('about.page.partner'))->with('update', 'updated successfully!!');
            }
            return redirect(route('about.page.partner'))->with('update', 'Data Not Changed');
        }

        if ($req->image) {
            $newImage = time() . "-" . $req->image->getClientOriginalName();
            $req->image->move(public_path('images/about'), $newImage);
            $res = partnerModel::where('id', $id)->update([
                'logo' => $newImage
            ]);

            if ($res) {
                return redirect(route('about.page.partner'))->with('update_logo', 'updated successfully!!');
            }
            return redirect(route('about.page.partner'))->with('update_logo', 'Data Not Changed!!');
        }

    }

    public function partner_update(Request $req){
        $id = $req->input('edit_id');
        $res = partnerTitleModel::where('id', $id)->update([
            'title' => $req->title,
            'des'=>$req->des
        ]);
        if ($res) {
            return redirect(route('about.page.partner'))->with('update_partner', 'updated successfully!!');
        }
        return redirect(route('about.page.partner'))->with('update_partner', 'Data Not Changed!!');
    }
}