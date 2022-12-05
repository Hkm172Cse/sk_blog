<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authModel;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class authController extends Controller
{
    // Login Page
    public function login_page(){
        return view('pages.login.login');
    }

    // Login action to database
    public function login(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        $res = authModel::where('email','=',$email)->where('password','=',$password)->count();
        
        if($res){
            $req->session()->put('email', $email);
            return redirect('/');
        }else{
            return redirect('/administrator')->with('login_err','Credential Not Mathced');
        }
        
    }

    // User Logout

    public function logout(Request $req){
       
        $req->session()->flush();
        return redirect('/administrator');
    }


    // Pass Reset viewfile(page)
    public function forgotPpassword(){
        return view('pages.login.forgotPpassword');
    }


    // Send a link to user email address for reset password 
    public function handleSubmition(Request $req){
        $req->validate(['email'=>'required|email|exists:table_administrator,email']);
        
        $token = Str::random(64);
        DB::table('password_reset')->insert([
            'email'=>$req->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        $action_link = route('user.reset.password',['token'=>$token, 'email'=>$req->email]);
        
        $body = "You revieved a request for the reset password".$req->email."you can reset the password by cliking the link below";
        \Mail::send('pages.login.email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($req){
            $message->from('noreply@example.com', 'Your app name');
            $message->to($req->email,'Your name')->subject('reset-Password');
        });
        return redirect('/forgot-password')->with('success','you have a email your password reset link');

    }

    // go to new page for generate new password
    public function showResetForm(Request $req,$token=null){
        return view('pages.login.reset')->with(['token'=>$token,'email'=>$req->email]);
    }

    // Password Reset and go to login page
    public function resetPassword(Request $req){
      
        $req->validate([
            'email'=>'required|email|exists:table_administrator,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required'
        ]);

       $check_token = DB::table('password_reset')->where([
        'email'=>$req->email,
        'token'=>$req->token
       ])->first();
       if(!$check_token){
            return redirect(route('user.reset.password'))->with('failed',"Invalid Token");
       }else{
        authModel::where('email',$req->email)->update([
            'password'=>$req->password
        ]);

        DB::table('password_reset')->where(['email'=>$req->email])->delete();

        return redirect('/administrator')->with('pass_rst', 'Your password is updated. you can login now');
       }
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }
}
 