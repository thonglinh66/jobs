<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index ()
    {
        
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();

        return view('pages.users.post.index', compact('data'));
    }
    public function post ()
    {
        
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();

        return view('pages.users.post.infor_post', compact('data'));
    }
    public function about ()
    {
        return view('pages.users.post.about');
    }
    public function jobsingle ()
    {
        return view('pages.users.post.job-single');
    }
    public function contact ()
    {
        return view('pages.users.post.contact');
    }
}
