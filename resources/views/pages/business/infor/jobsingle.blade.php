@extends('layouts.job_single')


 

@section('clicked')
<li><a href="{{route('business.index', $data->code)}}" class="nav-link active">Trang Chủ</a></li>
            <li><a href="{{route('business.add.post',$data->code)}}">Đăng bài</a></li>
            <li><a href="{{route('business.upload',$data->code)}}">Cập nhập thông tin</a></li>
@endsection
@section('button_like')
@if ( $datenow > $data->deadline )
 <div class="col-lg-4">
            <div class="row">
                <div class="col-6">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" style="width:215%; padding: 20px" onclick="loginshow()" data-target="#exampleModalCenter">
Cập nhập số lượng trúng tuyển
</button>              </div>
            </div>
          </div> 
  
          @endif
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
              <a href="{{route('business.index', $data->code)}}" class="border p-2 d-inline-block mr-3 rounded">

              <img src="{{asset('UserView/images/'. $data->image)}}" alt="Image">
              </a>
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
                    <span class="m-2"><span class="icon-heart mr-2"></span>{{$count}}</span>
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
@section('submit')
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
            <li class="mb-2"><strong class="text-black">Số lượng đã ứng tuyển:</strong> {{$applied->count()}}</li>
        </ul>
    </div>
@endsection
@section('comment')

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style=" max-width:60%; margin: 10% auto;"   role="document">
    <div class="modal-content">
      <form  action="{{route('post.addmember',$data->id)}} " class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="text-black my-5 border-bottom pb-2">Nhập số lượng</h3>
              <div class="form-group">
                <label for="company-website">Số lượng ứng tuyển</label>
                <input type="text" name="lang" class="form-control" id="company-website" disabled="true" value="{{$applied->count()}}">
              </div>
              <div class="form-group">
                <label for="company-tagline">Số lượng trúng tuyển</label>
                <input type="number" class="form-control" id="quantity" name="amount" min="0" max="{{$applied->count()}}">
              </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection


 
