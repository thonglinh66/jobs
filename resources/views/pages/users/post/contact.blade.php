@extends('layouts.contact')
@section('active')
<li><a href="{{route('post.index.home')}}" >Trang chủ</a></li>
              <li><a href="{{route('home.about')}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings')}}">Danh sách công việc</a></li>
              <li><a href="{{route('home.contact')}}" class="nav-link active">Liên hệ</a></li>    
@endsection