<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Support\Str;
use DB;

class BusinessController extends Controller
{
    public function index ($id)
    {
        $language = DB::table('business')->join('languages','business.code','=','languages.code')->where('business.code','=',$id)->get();
        $data = Business::where('code',$id)->first();
        $datacount = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->get();
        $datapost = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->orderBy('posts.id', 'DESC')->paginate(5);
        return view('pages.business.infor.business', compact('data','language','datapost','datacount'));
    }
    public function jobsingle ($id)
    {

        $lang = DB::table('languages')->where('languages.PostID','=',$id)->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','name','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        return view('pages.business.infor.jobsingle',compact('data','lang'));
    }
    public function upload ($id)
    {    $data = DB::table('business')->where('code','=',$id)->first();
        return view('pages.business.infor.upload',compact('data')) ;
    }
    public function post (Request $request)
    {  
        $user = $request->session()->get('user');
        $business = Business::where('code','=',$user)->first();
        $img = $request->file('Img');
        if(isset($img)){
        $path = public_path('UserView/images');
        $name = Str::random(5).'_'.$img->getClientOriginalName();
        $business->image = $name;
        $img->move($path,$name);
       
        
        }
        
        
        $business->code = $user;
        $business->name = $request->get('name');
        $business->type = $request->get('type');
        $lang =  $request->lang;
        if(isset($lang)){
            $drop_lang = DB::table('languages')->where('code','=',$user)->delete();
            foreach(array_map("trim",explode(',', $lang)) as $l){
                $table_lang = new Language();
                $table_lang->name_l = $l;
                $table_lang->code = $user;
                $table_lang->save();
            }
        }
        
        $business->address = $request->get('adress');
        $business->decription= $request->get('description');
        $business->website = $request->get('website');
        $business->facebook = $request->get('face');
        $business->twitter = $request->get('twtter');
        $business->mail = $request->get('mail');
        $business->phone = $request->get('phone');
        
        
       
        $business->save();
        return redirect('business/'.$user)->with('success', 'Thêm thành công');
    }
    public function destroy (Request $request, $post){
        $user = $request->session()->get('user');
        $drop_post = DB::table('posts')->where('id','=',$post)->delete();
        return redirect('business/'.$user);    
    }  
    public function update (Request $request, $id){
        $user = $request->session()->get('user');
        $post = DB::table('posts')->where('id','=',$id)->first();
        return redirect('business/'.$user);    
    }  
    public function updatepost ($id)
    {

        $lang = DB::table('languages')->where('languages.PostID','=',$id)->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','name','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        return view('pages.business.infor.upload_post',compact('data'));
    }
    
    public function postupdatepost(Request $request,$id){
        $user = $request->session()->get('user');
        $Post = Post::where('id','=',$id)->first();
        $Post->code = $user;
        $Post->title = $request->get('name');
        $drop_lang = DB::table('languages')->where('PostID','=',$id)->delete();
        $lang =  $request->lang;
        foreach(array_map("trim",explode(',', $lang)) as $l){
            $table_lang = new Language();
            $table_lang->name = $l;
            $table_lang->PostID = $id;
            $table_lang->save();
        }
        $Post->type = $request->get('type');
        $Post->pdecription= $request->get('description');
        $Post->min_salary = $request->get('min-sala');
        $Post->max_salary = $request->get('max-sala');
        $Post->deadline = $request->get('date');
        
       
        $Post->save();
        return redirect('business/updatepost/'.$id)->with('success', 'Thêm thành công');
    }

    public function addpost ($id)
    {
        $data = DB::table('business')->where('code','=',$id)->first();
            // dd($id);
        return view('pages.business.infor.addpost',compact('data'));
    }
    public function postaddpost(Request $request,$id){
        $user = $request->session()->get('user');
        $Post = new Post();
        $Post->code = $user;
        $Post->title = $request->get('name');
       
        $Post->member = $request->get('member');
        $Post->type = $request->get('type');
        $Post->pdecription= $request->get('description');
        $Post->min_salary = $request->get('min-sala');
        $Post->max_salary = $request->get('max-sala');
        $Post->deadline = $request->get('date');
        $Post->save();
        
        $idpost  = $Post->id;
        $lang =  $request->lang;
        foreach(array_map("trim",explode(',', $lang)) as $l){
            $table_lang = new Language();
            $table_lang->name_l = $l;
            $table_lang->PostID = $idpost;
            $table_lang->save();
        }
        return redirect('business/addpost/'.$id)->with('success', 'Thêm thành công');
    }
}
