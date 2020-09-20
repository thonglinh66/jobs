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
              <li><a href="{{route('home.joblistings')}}">Công việc</a></li>
              <li><a href="{{route('home.contact')}}" class="nav-link active">Liên hệ</a></li>   
              @if(isset($user))
             <li><a href="{{route('home.appling')}}" >Ứng tuyển</a></li>    
             @endif  
             
@endsection
 
@section('navbar_about_us')
<section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('UserView/images/hero_1.jpg')}});" id="home-section">
      <div class="container" style=" margin-top: 20px;">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Giới thiệu</h1>
            <div class="custom-breadcrumbs">
              <a href="{{route('post.index.home')}}">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Liên hệ</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection