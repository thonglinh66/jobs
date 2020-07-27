@extends('layouts.Business_infor')
@section('command')
<script>
   function loginshow (){
      var msg = '{{Session::get('user')}}';
      if(msg == ''){
        alert('Bạn cần đăng nhập để sử dụng tính năng này');
      }
    }
  </script>
@endsection
@section('active')
<li><a href="{{route('post.index.home')}}" class="nav-link active" >Trang chủ</a></li>
              <li><a href="{{route('home.about',$acount->code)}}">Giới thiệu</a></li>
              <li><a href="{{route('home.joblistings',$acount->code)}}" >Danh sách công việc</a></li>
              <li><a href="{{route('home.contact',$acount->code)}}" >Liên hệ</a></li>  
           
@endsection
@section('button_like')
<div class="col-lg-4">
            <div class="row">
            <div class="col-6">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" style="padding:10%;" onclick="loginshow()" data-target="#exampleModalCenter">
Nhận xét
</button>

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
            {{$datapost->links()}}
          </div>
    </div>
    </div>


@endsection
@section('comment')

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@if(isset($student)){
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style=" max-width:60%; margin: 10% auto;"   role="document">
    <div class="modal-content">
      <form  action="{{route('post.addreview',$acount->code)}} " class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="text-black my-5 border-bottom pb-2">Nhận xét</h3>
              <div class="form-group">
                <label for="company-website">Từ</label>
                <input type="text" name="lang" class="form-control" id="company-website" disabled="true" value="{{$student->name}}">
              </div>
              <div class="form-group">
                <label for="company-tagline">Nội dung</label>
                <textarea id="editor-2" class="form-control editor"  rows="20" cols="50" name="content"></textarea>
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

