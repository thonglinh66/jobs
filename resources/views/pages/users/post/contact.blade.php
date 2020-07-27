@extends('layouts.contact')
@section('command')
@if(Session::has('name'))
<script>
      var msg = '{{Session::get('name')}}';
        alert(msg);
  </script>
      @endif
@endsection
@section('active')
<li><a href="{{route('post.index.home')}}" >Trang chủ</a></li>
              <li><a href="{{route('home.about')}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings')}}">Danh sách công việc</a></li>
              <li><a href="{{route('home.contact')}}" class="nav-link active">Liên hệ</a></li>    
             
@endsection