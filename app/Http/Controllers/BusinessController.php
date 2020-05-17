<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Language;
use Illuminate\Support\Str;
use DB;

class BusinessController extends Controller
{
    public function index ($id)
    {
        $language = DB::table('business')->join('languages','business.code','=','languages.code')->where('business.code','=',$id)->get();
        $data = Business::where('code',$id)->first();
        $datacount = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->get();
        $datapost = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->select('name','posts.id','posts.code','title','image','pdecription','address','type','min_salary','max_salary')->paginate(5);
        return view('pages.business.infor.business', compact('data','language','datapost','datacount'));
    }
    public function jobsingle ($id)
    {

        $lang = DB::table('languages')->where('languages.PostID','=',$id)->get();
        $data = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->select('member','posts.created_at','name','posts.id','posts.code','title','name','deadline','image','pdecription','address','type','min_salary','max_salary')->where('posts.id','=',$id)->first()    ;
        return view('pages.users.post.jobsingle',compact('data','lang'));
    }
    public function upload ($id)
    {    $data = DB::table('business')->where('code','=',$id)->first();
        return view('pages.business.infor.upload',compact('data')) ;
    }
    public function post (Request $request)
    {  
        $img = $request->file('Img');
        $path = public_path('UserView/images');
        $name = Str::random(5).'_'.$img->getClientOriginalName();
        $img->move($path,$name);
        $user = $request->session()->get('user');
        $business = Business::where('code','=',$user)->first();
        $business->code = $user;
        $business->name = $request->get('name');
        $drop_lang = DB::table('languages')->where('code','=',$user)->delete();
        $lang =  $request->lang;
        foreach(array_map("trim",explode(',', $lang)) as $l){
            $table_lang = new Language();
            $table_lang->name = $l;
            $table_lang->code = $user;
            $table_lang->save();
        }
        $business->address = $request->get('adress');
        $business->decription= $request->get('description');
        $business->website = $request->get('website');
        $business->facebook = $request->get('face');
        $business->twitter = $request->get('twtter');
        $business->mail = $request->get('mail');
        $business->phone = $request->get('phone');
        $business->image = $name;
        
       
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
    
    public function postupdatepost($id){
        $user = $request->session()->get('user');
        $business = Business::where('code','=',$user)->first();
        $business->code = $user;
        $business->name = $request->get('name');
        $drop_lang = DB::table('languages')->where('code','=',$user)->delete();
        $lang =  $request->lang;
        foreach(array_map("trim",explode(',', $lang)) as $l){
            $table_lang = new Language();
            $table_lang->name = $l;
            $table_lang->code = $user;
            $table_lang->save();
        }
        $business->address = $request->get('adress');
        $business->decription= $request->get('description');
        $business->website = $request->get('website');
        $business->facebook = $request->get('face');
        $business->twitter = $request->get('twtter');
        $business->mail = $request->get('mail');
        $business->phone = $request->get('phone');
        $business->image = $name;
        
       
        $business->save();
        return redirect('business/'.$user)->with('success', 'Thêm thành công');
    }
}
