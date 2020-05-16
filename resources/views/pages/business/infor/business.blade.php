@extends('layouts.Business_Home')
@section('Login')
 <a href="{{route('business.upload')}}" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
<a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
@endsection
@section('Conten_Post')

<div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Showing {{count($datacount)}} Posts</h2>
          </div>
        </div>
<ul class="job-listings mb-5">
    @foreach($datapost as $d)
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
            @if($d->type == 2)
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