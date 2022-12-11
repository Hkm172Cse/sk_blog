<?php

namespace App\Http\Controllers\back_end;

use App\Http\Controllers\Controller;
use App\Models\front_end\contact\contact;
use Illuminate\Http\Request;

class userInfoController extends Controller
{
    public function index(){
        $data = contact::all();
        return view('back_end.UserInfo.UserInfo',['data'=>$data]);
    }

    public function userEmailInfo(Request $req){
        $id = $req->input('id');
        $data = contact::where('id', $id)->get();
        return $data;
    }

    public function delete($id){
        $result = contact::where('id', $id)->delete();
        if($result){
            return redirect(route('user.info'))->with('del_msg', 'delete successfully');
        }
    }


    public function sendTo(Request $req){
        
       // $data = ['user' => $sendTo, 'subject' => $subject, 'address' => $email];
        //return $data;
        $result = \Mail::send('front_end.contact.welcome',['body'=>$req->email],function($message) use ($req){
            $message->from('noreply@example.com', 'Sk-associates');
            $message->to($req->sendTo,'Your name')->subject("Reply- ".$req->subject);
        });

        return 1;
    }
}
