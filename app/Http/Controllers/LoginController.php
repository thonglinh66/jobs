<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            return view('pages.business.infor.business');
            //  
        }else{
            return view('pages.login');  
            // dd('thất bại');   
        }
    }
}
