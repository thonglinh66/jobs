@extends('layouts.home')
@section('Login')
<a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
@endsection
@section('active')
  <li><a href="{{route('post.index.home')}}" class="nav-link active" >Trang chủ</a></li>
  <li><a href="{{route('home.about')}}">Giới thiệu</a></li>
  <li><a href="{{route('home.joblistings')}}" >Công việc</a></li>
  <li><a href="{{route('home.contact')}}" >Liên hệ</a></li> 
@endsection
@section('Conten_Post')

<div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Bao gồm {{count($data)}} bài đăng </h2>
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
@section('logo')

@foreach($business as $bu)
<div class="col-6 col-lg-3 col-md-6 text-center">
    <img src="{{asset('UserView/images/'.$bu->image)}}" alt="Image" class="img-fluid logo-1">
</div>
 @endforeach

@endsection


@section('search')
<div class="container" >
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Cách tốt nhất để tiếp cận đến công việc của bạn</h1>
            </div>
            <form action="{{route('search')}}" method="post" class="search-jobs-form" >
            @csrf
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" name="searchtext" class="form-control form-control-lg" placeholder="Tên công việc, công ty...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="searchcheck" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Ngôn ngữ">
                  @foreach($language as $lang)
                    <option value="{{$lang->keyname}}">{{$lang->keyname}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="type" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Loại tuyển dụng">
                    <option  value="1">Tuyển dụng</option>
                    <option value="0">Thực tập</option>
                    <option selected value="2">Tuyển dụng - Thực tập</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Tìm kiếm</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 popular-keywords" >
                  <h3 style="font-size:160%" >Phổ biến:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                  @foreach($trending as $tr)
                    <li><a href="{{route('search.trend',$tr->keyname)}}" style="font-size:130%" class=""><img src="{{asset('UserView/images/'.$tr->image)}}" alt="Girl in a jacket" width="50" height="50"></a></li>
                    <!-- <li><a href="#" class="">Python</a></li>
                    <li><a href="#" class="">Developer</a></li> -->
                    @endforeach
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#post" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>
@endsection


        