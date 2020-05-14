<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Str;

class BusinessController extends Controller
{
    public function index ()
    {
        
        $data = Business::all();

        return view('pages.business.infor.business', compact('data'));
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
