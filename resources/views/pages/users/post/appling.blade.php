@extends('layouts.appling')
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
              <li><a href="{{route('home.contact')}}" >Liên hệ</a></li>   
              @if(isset($user))
             <li><a href="{{route('home.appling')}}" class="nav-link active">Ứng tuyển</a></li>    
             @endif  
             
@endsection
 
@section('navbar_appling_us')
<section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('UserView/images/hero_1.jpg')}});" id="home-section">
      <div class="container" style=" margin-top: 20px;">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Giới thiệu</h1>
            <div class="custom-breadcrumbs">
              <a href="{{route('post.index.home')}}">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Ứng tuyển</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('Conten_Post')

<div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Bạn đã ứng tuyển {{count($data)}} bài đăng </h2>
          </div>
        </div>
<ul class="job-listings mb-5">
    @foreach($data as $d)
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
        <a href="{{route('home.jobsingle',$d->id)}}"></a>
        <div class="job-listing-logo">
            <img src="{{asset('UserView/images/'.$d->image)}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
        </div>

        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
            <h2>{{$d->title}}</h2>
            <strong>{{$d->name}}</strong>
            </div>
            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
            <span class="icon-room"></span> {{$d->address}}
            </div>
            <div class="job-listing-meta">

            <span class="badge badge-danger">
            @if($d->type == 1)
                Tuyển dụng 
            @endif
            @if($d->type == 0)
                Thực tập
            @endif
            </span>
            </div>
        </div>
            
    </li>
    @endforeach
    </ul>

    <div class="row pagination-wrap">
          
      <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
 
      </div>
      <div class="col-md-6 text-center text-md-right">
            {{$data->links()}}
          </div>
    </div>
    </div>

@endsection