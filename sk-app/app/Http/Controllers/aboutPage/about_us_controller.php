<?php

namespace App\Http\Controllers\aboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutPage\aboutUsModel;
use App\Models\aboutPage\aboutUsTextModel;

class about_us_controller extends Controller
{
    public function index()
    {
        $image_data = aboutUsModel::all();
        $text_data = aboutUsTextModel::all();
        return view('back_end.about.aboutUs.aboutUs', ['image_data' => $image_data, 'text_data'=>$text_data]);
    }
    public function text_edit($id){
        $data = aboutUsTextModel::where('id',$id)->get();
        return view('back_end.about.aboutUs.about_us_text_edit', ['data'=>$data]);
    }

    public function text_update(Request $req){
        $id = $req->input('edit_id');
        $result = aboutUsTextModel::where('id',$id)->update([
            'name'=>$req->name,
            'title'=>$req->title,
            'des'=>$req->des
        ]);

        if($result){
            return redirect(route('about.about_us'))->with('update_text','updated successful');
        }
    }
    public function edit($id)
    {
        $data = aboutUsModel::where('id', '=', $id)->get();
        return view('back_end.about.aboutUs.edit_aboutUsImage', ['data' => $data]);
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

        if($req->image_one && $req->image_two && $req->image_three){
            
            $imgOne = time()."-".$req->image_one->getClientOriginalName();
            $imgTwo = time()."-".$req->image_two->getClientOriginalName();
            $imgThree = time()."-".$req->image_three->getClientOriginalName();

            $req->image_one->move(public_path('images/about'), $imgOne);
            $req->image_two->move(public_path('images/about'), $imgTwo);
            $req->image_three->move(public_path('images/about'), $imgThree);
            $res = aboutUsModel::where('id', $id)->update([
                'image_one' => $imgOne,
                'image_two' => $imgTwo,
                'image_three' => $imgThree
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
        }

        if($req->image_one && $req->image_two){

            $imgOne = time()."-".$req->image_one->getClientOriginalName();
            $imgTwo = time()."-".$req->image_two->getClientOriginalName();

            $req->image_one->move(public_path('images/about'), $imgOne);
            $req->image_two->move(public_path('images/about'), $imgTwo);
            $res = aboutUsModel::where('id', $id)->update([
                'image_one' => $imgOne,
                'image_two' => $imgTwo,
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
        } 
        if($req->image_two && $req->image_three){

            $imgTwo = time()."-".$req->image_two->getClientOriginalName();
            $imgThree = time()."-".$req->image_three->getClientOriginalName();

            $req->image_two->move(public_path('images/about'), $imgTwo);
            $req->image_three->move(public_path('images/about'), $imgThree);
            $res = aboutUsModel::where('id', $id)->update([
                'image_two' => $imgTwo,
                'image_three' => $imgThree
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
        }

        
        if($req->image_one && $req->image_three){

            $imgOne = time()."-".$req->image_one->getClientOriginalName();
            $imgThree = time()."-".$req->image_three->getClientOriginalName();

            $req->image_one->move(public_path('images/about'), $imgOne);
            $req->image_three->move(public_path('images/about'), $imgThree);
            $res = aboutUsModel::where('id', $id)->update([
                'image_one' => $imgOne,
                'image_two' => $imgThree,
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
        }


                
        if($req->image_one && $req->image_two==null && $req->image_three==null){

            $imgOne = time()."-".$req->image_one->getClientOriginalName();

            $req->image_one->move(public_path('images/about'), $imgOne);
            $res = aboutUsModel::where('id', $id)->update([
                'image_one' => $imgOne
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
        }

        if($req->image_two && $req->image_one== null && $req->image_three==null){

            $imgTwo = time()."-".$req->image_two->getClientOriginalName();

            $req->image_two->move(public_path('images/about'), $imgTwo);
            $res = aboutUsModel::where('id', $id)->update([
                'image_two' => $imgTwo
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
        }

        if($req->image_two && $req->image_one== null && $req->image_three==null){

            $imgTwo = time()."-".$req->image_two->getClientOriginalName();

            $req->image_two->move(public_path('images/about'), $imgTwo);
            $res = aboutUsModel::where('id', $id)->update([
                'image_two' => $imgTwo
            ]);
            if($res){
                return redirect(route('about.about_us'))->with('update_image', 'updated successfully');
            }
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
