<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Str;
use DB;

class BusinessController extends Controller
{
    public function index ($id)
    {
        $language = DB::table('business')->join('languages','business.code','=','languages.code')->where('business.code','=',$id)->get();
        $data = Business::where('code',$id)->first();
        $datacount = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->get();
        $datapost = DB::table('posts')->join('business', 'business.code','=', 'posts.code')->where('business.code', '=',$id)->paginate(5);
        return view('pages.business.infor.business', compact('data','language','datapost','datacount'));
    }
    public function upload ()
    {

        return view('pages.business.infor.upload') ;
    }
    public function store (Request $request)
    {
        $img = $request->file('Img');
        $path = public_path('UserView/images');
        $name = Str::random(5).'_'.$img->getClientOriginalName();
        $img->move($path,$name);

        $business = new Business();
        $business->name = $request->get('name');
        $business->address = $request->get('adress');
        $business->decription= $request->get('description');
        $business->website = $request->get('website');
        $business->facebook = $request->get('face');
        $business->twitter = $request->get('twtter');
        $business->mail = $request->get('mail');
        $business->phone = $request->get('phone');
        $business->image = $name;
        
    //    dd($business);
        $business->save();
        return redirect('business')->with('success', 'Thêm thành công');
    }
}
