@extends('layouts.Infor_post')
@section('active')
<li><a href="{{route('post.index.home')}}" class="nav-link active" >Trang chủ</a></li>
              <li><a href="{{route('home.about',$acount->code)}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings',$acount->code)}}" >Danh sách công việc</a></li>
              <li><a href="{{route('home.contact',$acount->code)}}" >Liên hệ</a></li>    
            
@endsection
@section('Login-Logout')
<li class="d-lg-none"><a href="login.html">Log in</a></li>
@endsection