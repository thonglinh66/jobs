@extends('layouts.job_single')
@section('title')
 <li><a href="{{route('business.upload',$data->id)}}">Cập nhật bài đăng</a></li>
@endsection

 
@section('header')
@extends('layouts/business/navbar_business')
@section('clicked')
<li><a href="{{route('business.index', $data->code)}}" class="nav-link active">Trang Chủ</a></li>
            <li><a href="{{route('business.add.post',$data->code)}}">Đăng bài</a></li>
            <li><a href="{{route('business.upload',$data->code)}}">Cập nhập thông tin</a></li>
@endsection
@endsection
@section('button_Apply')
<form method="POST" action="{{route('business.post.delete',$data->id)}}" onsubmit="return ConfirmDelete( this )">
@method('DELETE')
@csrf
<div class="row mb-5">
<div class="col-6">
<button  type="submit" name="delete" class="btn btn-block btn-light btn-md">Xóa bài</button>
</div>
</form>
<div class="col-6">
<a href="{{route('business.post.update.post', $data->id)}}" class="btn btn-block btn-primary btn-md">Cập nhật bài đăng</a>
</div>
</div>


  

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
                  @endif  
                  @if ($data->type == 0)
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
 
