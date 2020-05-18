@extends('layouts.job_single')



@section('header')
@include('layouts/blade_index_user/navbar')

@endsection

@section('head')
 <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="{{asset('UserView/images/'. $data->image)}}" alt="Image">
              </div>
              <div>
                <h2>{{$data->title}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$data->name}}</span>
                  <span class="m-2"><span class="icon-room mr-2"></span>{{$data->address}}</span>
                  @if($data->type == 1)
                     <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">tuyển dụng</span></span>
                  @else
                     <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">thực tập</span></span>
                  @endif  

                </div>
               </div>
@endsection

@section('List_Language')
@foreach($lang as $l)
<li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$l->name_l}}</span></li>
@endforeach
@endsection
@section('content')
    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$data->pdecription}}</span></li>

@endsection
@section('active')
<li><a href="{{route('post.index.home')}}" class="nav-link active" >Trang chủ</a></li>
              <li><a href="{{route('home.about',$acount->code)}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings',$acount->code)}}" >Danh sách công việc</a></li>
              <li><a href="{{route('home.contact',$acount->code)}}" >Liên hệ</a></li>    
@endsection
@section('sumary')
    <div class="bg-light p-3 border rounded mb-4">
        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Tóm tắt công việc</h3>
        <ul class="list-unstyled pl-3 mb-0">
            <li class="mb-2"><strong class="text-black">Ngày đăng:</strong> {{ date('d-m-Y', strtotime($data->created_at)) }}</li>
            <li class="mb-2"><strong class="text-black">Số lượng tuyển dụng:</strong> {{$data->member}}</li>
            <li class="mb-2"><strong class="text-black">Loại:</strong>  @if($data->type == 1)
                     tuyển dụng
                  @else
                    thực tập
                  @endif</li>
            <li class="mb-2"><strong class="text-black">Lương:</strong> {{$data->min_salary}}$ - {{$data->max_salary}}$</li>
            <li class="mb-2"><strong class="text-black">Hạn chót:</strong> {{ date('d-m-Y', strtotime($data->deadline)) }}</li>
        </ul>
    </div>
@endsection
@section('button_Apply')
<div class="row mb-5">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Thích</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Ứng tuyển</a>
              </div>
            </div>
@endsection

 
