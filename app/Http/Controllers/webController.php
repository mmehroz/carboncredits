<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class webController extends Controller
{
    public function index(){
       return view('web.home');
    }
    public function signup(){
       return view('web.signup');
    }
    public function submitsignup(Request $request){
        $this->validate($request, [
            'user_email' =>'required|unique:user,user_email',
        ]);
        $info = array(
            'user_firstname'    => $request->user_firstname,
            'user_lastname'     => $request->user_lastname,
            'user_phonenumber'  => $request->user_phonenumber, 
            'user_email'        => $request->user_email,
            'user_password'     => $request->user_password,
            'role_id'           => 2,
            'status_id'         => 1,
            'created_at'        => date('Y-m-d h:i:s'),
        );
        $save = DB::table('user')->insert($info);
        if($save){
            return redirect('/')->with('message', 'Signup Successfully');
        }else{
            return redirect('/signup')->with('message', 'Oops! Something Went Wrong');
        }
    }
}
