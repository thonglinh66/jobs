@extends('layouts.about')
@section('active')
<li><a href="{{route('post.index.home')}}" >Trang chủ</a></li>
              <li><a href="{{route('home.about',$acount->code)}}" class="nav-link active">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings',$acount->code)}}">Danh sách công việc</a></li>
              <li><a href="{{route('home.contact',$acount->code)}}">Liên hệ</a></li>    
@endsection