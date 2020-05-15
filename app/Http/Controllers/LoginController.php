<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
    public function getAuthLogin(){
        return view('pages.login');
    }
    public function postAuthLogin(Request $request){
        $arr = [
            'code' => $request->username,
            'password' => $request->password,
        ];
        // dd(Auth::attempt($arr));
        if (Auth::attempt($arr)) {
            $request->session()->put('user', $request->username);
            $id = $request->session()->get('user');
            return redirect('business/'.$id);
            //  
        }else{
            return view('pages.login')->with('fails','Đăng nhập thất bại');  
            // dd('thất bại');   
        }
    }
    public function postAuthLogout(Request $request){
        Auth::logout();
        return redirect('login');
        
    }
}
