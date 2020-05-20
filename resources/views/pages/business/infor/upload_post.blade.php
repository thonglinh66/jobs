@extends('layouts.upload_post')

@section('clicked')
<li><a href="{{route('business.index', $data->code)}}" >Trang Chủ</a></li>
              <li><a href="{{route('business.add.post',$data->code)}}" class="nav-link active">Đăng bài</a></li>
              <li><a href="{{route('business.upload',$data->code)}}">Cập nhập thông tin</a></li>
@endsection
@section('form')
<div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Cập nhập bài đăng</h2>
              </div>
            </div>
          </div>  
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
        <form  action="{{route('business.post.update.post',$data->id)}} " class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="text-black my-5 border-bottom pb-2">Thông tin</h3>
              <div class="form-group">
                <label for="company-name">Tiêu đề bài đăng</label>
                <input type="text" name="name" class="form-control" id="company-name" placeholder="Title">
              </div>

              <div class="form-group">
                <label for="company-tagline">Mô tả công việc</label>
                <textarea id="editor-2" class="form-control editor"  rows="20" cols="50" name="description"></textarea>
              </div>

              <div class="form-group">
                <label for="company-website">loại tuyển dụng</label>
                <select name="type" class="browser-default custom-select">
                    <option selected value="0">Tuyển dụng</option>
                    <option value="1">Thực tập</option>
                </select>
              </div>

              <div class="form-group">
                <label for="company-website">Ngôn Ngữ cần</label>
                <input type="text" name="lang" class="form-control" id="company-website" placeholder="C,C#">
              </div>

              <div class="form-group">
                <label for="job-description">Mức lương</label>
                    <label for="job-description">Thấp nhất</label>
                    <input type="text" name="min-sala" class="form-control" id="company-website" placeholder="0">
                    <label for="job-description">Cao nhất</label>
                    <input type="text" name="max-sala" class="form-control" id="company-website" placeholder="1000$">

              </div>
              
              <div class="form-group">
                <label for="company-website">Hạn chót nộp đơn</label>
                <input name="date"  type="datetime-local" class="form-control datepicker" data-date-format="mm/dd/yyyy hh:mm:ss">
              </div>
          
          <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Xem lại</a>
              </div>
              <div class="col-6">
                <input type="submit" class="btn btn-block btn-primary btn-md" name="submit" value="Lưu thông tin">
              </div>
            </div>
          </div>
        </div>
            </form>
            </div>

         
</div>

</div>
</section>
@endsection