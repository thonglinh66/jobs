<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function indexhome (Request $request)
    {
        $user = $request->session()->get('user');
        $trending = DB::table('trendings')->orderBy('count', 'DESC')->paginate(4);
        $language = DB::table('trendings')->get();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(5);
        return view('pages.users.post.index', compact('data','alldata','business','trending','language','user'));
    }
    public function index (Request $request,$id)
    {
        $user = $request->session()->get('user');
        $trending = DB::table('trendings')->orderBy('count', 'DESC')->paginate(4);
        $language = DB::table('trendings')->get();
        $acount = DB::table('acounts')->where('code','=',$id)->first();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(5);
        return view('pages.users.post.index', compact('data','alldata','acount','business','trending','language','user'));
    }
  
    public function business(Request $request,$id)
    {
        $comment_count = DB::table('comments')->where('code_BS','=',$id)->count();
        $comment = DB::table('comments')->join('students','students.code','=','comments.code_SV')->where('code_BS','=',$id)->paginate(5);
        $user = $request->session()->get('user');
        $student = DB::table('students')->where('code','=',$user)->first();
        $acount = DB::table('acounts')->where('code','=',$id)->first();
        $language = DB::table('business')->join('languages','business.code','=','languages.code')->where('business.code','=',$id)->get();
        $data = DB::table('business')->where('code','=',$id)->first();
        $datacount = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->get();
        $datapost = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(5);
        return view('pages.users.post.business_infor', compact('user','data','language','datapost','datacount','acount','student','comment','comment_count'));
    }
    public function post (Request $request)
    {       
        $user = $request->session()->get('user');
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        return view('pages.users.post.infor_post', compact('data','user'));
    }
    public function about (Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.users.post.about',compact('user'));
    }
    public function jobsingle (Request $request, $id)
    {
        $count =  DB::table('likes')->where('PostID','=',$id)->count();
        $user = $request->session()->get('user');
        $likes =  DB::table('likes')->where('code' ,'=',$user)->where('PostID','=',$id)->first();
        if(!isset($likes)){
            $color = "btn-light";
            $colortext ="text-danger";
        }else{
        $color = "btn-danger";
        $colortext ="text-light";
        }
        
        $acount = DB::table('acounts')->where('code','=',$user)->first();
        $lang = DB::table('languages')->where('languages.PostID','=',$id)->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        // dd($data);
        return view('pages.users.post.jobsingle_U',compact('data','lang','acount','user'))->with('color',$color)->with('colortext',$colortext)->with('count',$count);
    }
    public function contact (Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.users.post.contact',compact('user'));
    }
    public function joblistings (Request $request)
    {
        $user = $request->session()->get('user');
        $trending = DB::table('trendings')->orderBy('count', 'DESC')->paginate(4);
        $language = DB::table('trendings')->get();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(10);
        return view('pages.users.post.joblistings', compact('data','alldata','business','language','trending','user'));
    }
    public function searchtrend(Request $request){
        $trending = DB::table('trendings')->orderBy('count', 'DESC')->paginate(4);
        $language = DB::table('trendings')->get();
        $user = $request->session()->get('user');
        $acount = DB::table('acounts')->where('code','=',$user)->first();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $checked = $request->id.'%';
        // dd($checked);
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->join('languages', 'languages.PostID','=', 'posts.id')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
        ->where('name_l','like',$checked)->distinct()->paginate(5);
        return view('pages.users.post.index', compact('data','alldata','acount','business','trending','language','user'));
    }
    public function search (Request $request)
    {
        $trending = DB::table('trendings')->orderBy('count', 'DESC')->paginate(4);
        $language = DB::table('trendings')->get();
        $user = $request->session()->get('user');
        $text = $request->get('searchtext');
        $acount = DB::table('acounts')->where('code','=',$user)->first();
        $business = DB::table('business')->get();
        $alldata = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->get();
        $checked = $request->get('searchcheck');
        $rank = DB::table('trendings')->select('count')->where('keyname','=',$checked)->first();
        // dd($rank->count);
        if(isset($rank)){
            if($rank->count!= "null"){
                $dem = (int)$rank->count ;
                $dem ++;
                DB::table('trendings')->where('keyname','=',$checked)->update([
                'count' => $dem
                ]);
            }else{DB::table('trendings')->where('keyname','=',$checked)->update([
                'count' => 1
                ]);
            }
        }
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
                    ->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
                    
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
                    ->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
                }
                
            }
            // !dd($checked);
            if($checked == 'Null%'){
                if($text == '%%'){
                    // dd($type);
                    $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                    ->where('type','=',$type)->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
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
                    ->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
                }  
            } 
            }else {
                if($checked != 'Null%'){
                    if($text == '%%'){
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->join('languages', 'languages.PostID','=', 'posts.id')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                        ->where('name_l','like',$checked)->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
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
                        ->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
                    }
                    
                }
                // !dd($checked);
                if($checked == 'Null%'){
                    if($text == '%%'){
                        // dd($type);
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
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
                        ->orderBy('posts.id', 'DESC')->distinct()->paginate(5);
                    }  
                }
        }
        
       
            return view('pages.users.post.index', compact('data','alldata','acount','business','trending','language','user'));
    }
    public function search_list (Request $request)
    {
        $trending = DB::table('trendings')->orderBy('count', 'DESC')->paginate(4);
        $language = DB::table('trendings')->get();
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
                    ->orderBy('posts.id', 'DESC')->paginate(10);
                    
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
                    ->orderBy('posts.id', 'DESC')->paginate(10);
                }
                
            }
            // !dd($checked);
            if($checked == 'Null%'){
                if($text == '%%'){
                    // dd($type);
                    $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                    ->where('type','=',$type)->orderBy('posts.id', 'DESC')->paginate(10);
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
                    ->orderBy('posts.id', 'DESC')->paginate(10);
                }  
            } 
            }else {
                if($checked != 'Null%'){
                    if($text == '%%'){
                        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->join('languages', 'languages.PostID','=', 'posts.id')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')
                        ->where('name_l','like',$checked)->orderBy('posts.id', 'DESC')->paginate(10);
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
                        ->orderBy('posts.id', 'DESC')->paginate(10);
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
                        ->orderBy('posts.id', 'DESC')->paginate(10);
                    }  
                }
        }
        
       
            return view('pages.users.post.joblistings', compact('data','alldata','acount','business','trending','language','user'));
    }

   public function buttonlike(Request $request)
    {
        
        $name = $request->session()->get('user');
        $id  = $request->id;
        $likes =  DB::table('likes')->where('code' ,'=', $name)->where('PostID','=',$id)->first();
        if(!isset($likes)){
            DB::table('likes')->insert([
                ['code' => $name, 'PostID' => $id],
            ]);
        }else{
            DB::table('likes')->where('code' ,'=', $name)->where('PostID','=',$id)->delete();
        }
        $color = "btn-danger";
        $colortext = "text-light";
        $acount = DB::table('acounts')->where('code','=',$name)->first();
        $lang = DB::table('languages')->where('languages.PostID','=',$id)->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        $count =  DB::table('likes')->where('PostID','=',$id)->count();
        return back()->with('color',$color)->with('colortext',$colortext)->with('count',$count);
    }
    public function addreview(Request $request)
    {
        $user = $request->session()->get('user');
        $content = $request->get('content');
        if($content != 'null'){
            DB::table('comments')->insert(['code_SV' => $user, 'code_BS' => $request->id,'content' => $content ]);
        }
        return redirect()->back();
    }
    
}
