<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index ()
    {
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->paginate(5);
        return view('pages.users.post.index', compact('data','alldata'));
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
    public function jobsingle ($id)
    {
        $lang = DB::table('languages')->where('languages.PostID','=',$id)->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','name','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        // dd($data);
        return view('pages.users.post.jobsingle',compact('data','lang'));
    }
    public function contact ()
    {
        return view('pages.users.post.contact');
    }
    public function joblistings ()
    {
        return view('pages.users.post.joblistings');
    }
}
