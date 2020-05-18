@extends('layouts.contact')
@section('active')
<li><a href="{{route('post.index.home')}}" >Trang chủ</a></li>
              <li><a href="{{route('home.about',$acount->code)}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings',$acount->code)}}">Danh sách công việc</a></li>
              <li><a href="{{route('home.contact',$acount->code)}}" class="nav-link active">Liên hệ</a></li>    
@endsection