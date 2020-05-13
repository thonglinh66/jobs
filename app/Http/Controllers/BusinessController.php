<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

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
    public function store ()
    {
        
        return view('pages.business.infor.upload') ;
    }
}
