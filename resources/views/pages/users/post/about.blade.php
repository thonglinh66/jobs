@extends('layouts.about')
@section('active')
<li><a href="{{route('post.index.home')}}" >Trang chủ</a></li>
              <li><a href="{{route('home.about')}}" class="nav-link active">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings')}}">Danh sách công việc</a></li>
              <li><a href="{{route('home.contact')}}">Liên hệ</a></li>    
@endsection