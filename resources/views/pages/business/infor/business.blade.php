@extends('layouts.Business_Home')
@section('title')
@endsection
@section('clicked')
<li><a href="{{route('business.index', $data->code)}}" class="nav-link active">Trang Chủ</a></li>
              <li><a href="{{route('business.add.post',$data->code)}}">Đăng bài</a></li>
              <li><a href="{{route('business.upload',$data->code)}}">Cập nhập thông tin</a></li>
@endsection
@section('Login')
 <a href="{{route('business.upload',$data->code)}}" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
<a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
@endsection
@section('button_like')
<div class="col-lg-4" style="max-width:50%">
<div class="row">
<div class="col-6" style="max-width:70%;width:70%;flex:60%;height:100%">
<a href="{{route('business.upload',$data->code)}}" class="btn btn-block btn-primary btn-md">Cập nhật thông tin</a>
</div> 
</div> 
</div> 
@endsection
@section('Conten_Post')

<div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Bao gồm {{count($datacount)}} bài đăng</h2>
          </div>
        </div>
<ul class="job-listings mb-5">
    @foreach($datapost as $d)
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
        <a href="{{route('business.jobsingle',$d->id)}}"></a>
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
            {{$datapost->links()}}
          </div>
    </div>
    </div>

@endsection