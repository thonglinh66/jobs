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
        return view('pages.business.infor.business', compact('data','language'));
    }
    public function upload ($id)
    {    $data = Business::where('code',$id)->first();
        return view('pages.business.infor.upload',compact('data')) ;
    }
    public function store (Request $request,$id)
    {
        $img = $request->file('Img');
        $path = public_path('UserView/images');
        $name = Str::random(5).'_'.$img->getClientOriginalName();
        $img->move($path,$name);

        $business = new Business();
        $business->code = $id;
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
