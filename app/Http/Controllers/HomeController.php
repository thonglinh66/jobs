<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index ($id)
    {
        $acount = DB::table('acounts')->where('code','=',$id)->first();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(5);
        return view('pages.users.post.index', compact('data','alldata','acount','business'));
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
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        // dd($data);
        return view('pages.users.post.jobsingle_U',compact('data','lang'));
    }
    public function contact ()
    {
        return view('pages.users.post.contact');
    }
    public function joblistings ()
    {
        return view('pages.users.post.joblistings');
    }
    public function search (Request $request)
    {
        $user = $request->session()->get('user');
        $text = $request->get('searchtext');
        $acount = DB::table('acounts')->where('code','=',$user)->first();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $checked = $request->get('searchcheck');
        $type = $request->get('type');
        $text = '%'.$text.'%';
        $checked = $checked.'%';
        if($type != 2 ){
            
            if($checked != 'Null%'){
                if($text == '%%'){
                    $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->join('languages', 'languages.PostID','=', 'posts.id')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                    ->where('name_l','like',$checked)
                    // dd($text)  ;
                    ->where('type','=',$type)
                    ->orderBy('posts.id', 'DESC')->paginate(5);
                    
                }else{
                    $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')
                    ->where('type','=',$type)
                    ->where(
                        'member', 'like', $text
                    )
                    ->orWhere( 
                        'name', 'like', $text
                    )
                    ->orWhere( 
                        'title', 'like', $text
                    )
                    ->orWhere( 
                        'pdecription', 'like', $text
                    )
                    ->orWhere(
                        'address', 'like', $text
                    )
                    ->orWhere(
                        'min_salary', 'like', $text
                    )
                    ->orWhere( 
                        'max_salary', 'like', $text
                    )
                    ->orderBy('posts.id', 'DESC')->paginate(5);
                }
                
            }
            // !dd($checked);
            if($checked == 'Null%'){
                if($text == '%%'){
                    // dd($type);
                    $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                    ->where('type','=',$type)->orderBy('posts.id', 'DESC')->paginate(5);
                }else{
                    $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')
                    ->where('type','=',$type)
                    ->where(
                        'member', 'like', $text
                    )
                    ->orWhere( 
                        'name', 'like', $text
                    )
                    ->orWhere( 
                        'title', 'like', $text
                    )
                    ->orWhere( 
                        'pdecription', 'like', $text
                    )
                    ->orWhere(
                        'address', 'like', $text
                    )
                    ->orWhere(
                        'min_salary', 'like', $text
                    )
                    ->orWhere( 
                        'max_salary', 'like', $text
                    )
                    ->orderBy('posts.id', 'DESC')->paginate(5);
                }  
            } 
            }else {
                if($checked != 'Null%'){
                    if($text == '%%'){
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->join('languages', 'languages.PostID','=', 'posts.id')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                        ->where('name_l','like',$checked)->orderBy('posts.id', 'DESC')->paginate(5);
                        // dd($text)  ;
                    
                        
                        
                    }else{
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')
                    
                        ->where(
                            'member', 'like', $text
                        )
                        ->orWhere( 
                            'name', 'like', $text
                        )
                        ->orWhere( 
                            'title', 'like', $text
                        )
                        ->orWhere( 
                            'pdecription', 'like', $text
                        )
                        ->orWhere(
                            'address', 'like', $text
                        )
                        ->orWhere(
                            'min_salary', 'like', $text
                        )
                        ->orWhere( 
                            'max_salary', 'like', $text
                        )
                        ->orderBy('posts.id', 'DESC')->paginate(5);
                    }
                    
                }
                // !dd($checked);
                if($checked == 'Null%'){
                    if($text == '%%'){
                        // dd($type);
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(5);
                    }else{
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')
                        ->where(
                            'member', 'like', $text
                        )
                        ->orWhere( 
                            'name', 'like', $text
                        )
                        ->orWhere( 
                            'title', 'like', $text
                        )
                        ->orWhere( 
                            'pdecription', 'like', $text
                        )
                        ->orWhere(
                            'address', 'like', $text
                        )
                        ->orWhere(
                            'min_salary', 'like', $text
                        )
                        ->orWhere( 
                            'max_salary', 'like', $text
                        )
                        ->orderBy('posts.id', 'DESC')->paginate(5);
                    }  
                }
        }
        
       
            return view('pages.users.post.index', compact('data','alldata','acount','business'));
    }
    
}
