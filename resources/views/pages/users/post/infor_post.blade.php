@extends('layouts.Infor_post')
@section('active')
<li><a href="{{route('post.index.home')}}"  >Trang chủ</a></li>
              <li><a href="{{route('home.about')}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings')}}" >Công việc</a></li>
              <li><a href="{{route('home.contact')}}" >Liên hệ</a></li>    
              @if(isset($user))
             <li><a href="{{route('home.appling')}}">Ứng tuyển</a></li>    
             @endif  
@endsection
@section('Login-Logout')
<li class="d-lg-none"><a href="login.html">Log in</a></li>
@endsection