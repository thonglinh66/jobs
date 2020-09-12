@extends('layouts.login')
@section('active')
  <li><a href="{{route('post.index.home')}}" class="nav-link active" >Trang chủ</a></li>
  <li><a href="{{route('home.about')}}">Giới thiệu</a></li>
  <li><a href="{{route('home.joblistings')}}" >Công việc</a></li>
  <li><a href="{{route('home.contact')}}" >Liên hệ</a></li> 
@endsection