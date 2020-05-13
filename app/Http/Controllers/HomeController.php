<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index ()
    {
        
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('*')->get();

        return view('pages.users.post.index', compact('data'));
    }
}
