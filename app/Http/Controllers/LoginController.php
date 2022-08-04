<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
     public function login(){
       return view('web.login');
    }
    public function submitlogin(Request $request){
        $this->validate($request, [
            'user_email'     =>'required',
            'user_password'  => 'required',
        ]);
        $task = DB::table('user')
        ->select('*')
        ->where('user_email','=',$request->user_email)
        ->where('user_password','=',$request->user_password)
        ->where('status_id','=',1)
        ->first();
        if($task){
            session()->put([
                'id'        => $task->user_id ,
                'email'     => $task->user_email,
                'firstname' => $task->user_firstname,
                'lastname'  => $task->user_lastname,
                'role_id'   => $task->role_id,
            ]);
            return redirect('/');
        }else{
            return redirect('/login')->with('message', 'Login Failed, Please Try Again!');
        }
    }
    public function logout(){
        session()->forget('id');
        session()->forget('email');
        session()->forget('firstname');
        session()->forget('lastname');
        session()->forget('role_id');
        return redirect('/')->with('message', 'Logout Successfully');
    }
}
