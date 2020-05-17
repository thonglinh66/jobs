@extends('layouts.upload')
@section('form')
<form  action="{{route('business.post.upload')}} " class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="text-black my-5 border-bottom pb-2">Thông tin</h3>
              <div class="form-group">
                <label for="company-name">Tên Công Ty</label>
                <input type="text" name="name" class="form-control" id="company-name" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="company-tagline">Địa chỉ</label>
                <input type="text" name="adress" class="form-control" id="company-tagline" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="company-website">Chuyên về Ngôn Ngữ</label>
                <input type="text" name="lang" class="form-control" id="company-website" placeholder="C,C#">
              </div>

              <div class="form-group">
                <label for="job-description">Mô tả công ty</label>
                <textarea id="editor-2" class="form-control editor"  rows="20" cols="50" name="description"></textarea>

              </div>
              
              <div class="form-group">
                <label for="company-website">Website công ty</label>
                <input type="text" name="website" class="form-control" id="company-website" placeholder="https://">
              </div>

              <div class="form-group">
                <label for="company-website-fb">Facebook công ty</label>
                <input type="text" name="face" class="form-control" id="company-website-fb" placeholder="@Facebook">
              </div>

              <div class="form-group">
                <label for="company-website-mail">Mail Công ty</label>
                <input type="text" name="mail" class="form-control" id="company-website-tw" placeholder="@Mail">
              </div>
              <div class="form-group">
                <label for="company-website-tw">Twitter Công ty</label>
                <input type="text" name="twtter" class="form-control" id="company-website-tw" placeholder="@Twitter">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Điên thoại Công ty</label>
                <input type="text" name="phone" class="form-control" id="company-website-tw" placeholder="070...">
              </div>

              <div class="form-group">
                <label for="company-website-tw d-block">Cập nhật ảnh</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Lấy Từ<input name="Img" type="file" hidden>
                </label>
              </div>
              <div class="row align-items-center mb-5">
          
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
@endsection