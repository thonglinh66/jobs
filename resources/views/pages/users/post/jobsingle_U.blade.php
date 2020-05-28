
@extends('layouts.job_single')
@section('command')
<script>
   function loginshow (){
      var msg = '{{Session::get('user')}}';
      if(msg == ''){
        alert('Bạn cần đăng nhập để sử dụng tính năng này');
      }
    }
  </script>
  @if(Session::has('name'))
<script>
      var msg = '{{Session::get('name')}}';
        alert(msg);
  </script>
      @endif
@endsection
@section('header')


@section('active')
<li><a href="{{route('post.index.home')}}" >Trang chủ</a></li>
              <li><a href="{{route('home.about')}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings')}}" class="nav-link active">Danh sách công việc</a></li>
              <li><a href="{{route('home.contact')}}" >Liên hệ</a></li>    
@endsection
@endsection

@section('head')
                <a href="{{route('business.id',$data->code)}}" class="border p-2 d-inline-block mr-3 rounded">

                <img src="{{asset('UserView/images/'. $data->image)}}" alt="Image">
              </a>
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
                  <span class="m-2"><span class="icon-heart text-danger mr-2"></span>{{$count}}</span>
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
@section('button_Apply')

<form action="{{route('home.jobsingle.like',$data->id)}}" class="row mb-5" method="post">
@csrf
    <div class="col-6">
      <button type="submit" class="btn btn-block border-danger {{$color}} btn-md"><span class="  icon-heart-o mr-2 {{$colortext}}"></span>Thích</button>
    </div>
    <div class="col-6">
       <button type="button" class="btn btn-primary btn-block btn-md" data-toggle="modal" Onclick="loginshow()" data-target="#exampleModalCenter">
Ứng tuyển
</button>

    </div>
  </form>
@endsection
@section('sendmail')
<script type="text/javascript">
    
    
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus');
} 
})
</script>
@if(isset($acount))
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style=" max-width:60%; margin: 10% auto;"   role="document">
    <div class="modal-content">
    
      <form  action="{{route('post.sendMail',$data->id)}} " class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="text-black my-5 border-bottom pb-2">Nhận xét</h3>
              <div class="form-group">
                <label for="company-website">Từ</label>
                <input type="text" name="from" class="form-control" id="company-website" disabled="true" value="{{$acount->mail_SV}}">
              </div>
              <div class="form-group">
                <label for="company-website">Đến</label>
                <input type="text" name="to" class="form-control" id="company-website" disabled="true" value="{{$data->mail}}">
              </div>
              <div class="form-group">
                <label for="company-website-tw d-block">Hồ sơ xin việc</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Lấy Từ<input name="CV" type="file" hidden >
                </label>
              </div>
              <div class="form-group">
                <label for="company-tagline">Nội dung</label>
                <textarea id="editor-2" class="form-control editor"  rows="10" cols="50" name="content"></textarea>
              </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
          </div>
      </form>
      </div>
  </div>
</div>
     @endif
    
     
@endsection
@section('script')
<script>
 $(document).ready(function(){
  setTimeout(function(){
      $('#showMessage').hide()            
  },8000)
});
</script>
@endsection

 
